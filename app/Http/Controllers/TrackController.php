<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTrackController;
use App\Http\Requests\UpdateTrackRequest;
use Illuminate\Support\Facades\Gate;


class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tracks = Track::all();
        return view("ITI.Tracks.index", ["data" => $tracks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ITI.Tracks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrackController $request)
    {
        // dd($request->all());
        $data = $request->all();
        if($request->hasFile("image")){
            $trackImage = $data["image"];
            $path = $trackImage->store("uploadedImage", 'track_images');
            // dd($path);
            $data["image"]= $path;
        }
        Track::create($data);
        return to_route("tracks.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
        
       return view("ITI.Tracks.show", ["data" => $track ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
        // dd($track);
        return view("ITI.Tracks.edit", ["data" => $track]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrackRequest $request, Track $track)
    {
        $allowUser = Gate::inspect("update", $track);
        if($allowUser->allowed()){
            $track->update($request->all());
            return to_route("tracks.index");
        };

        return abort(403);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        // dd($track->image);
        if($track->image){
            try{
                unlink("Images/track_images/{$track->image}");
            }catch(Execption $err){
                dd($err);
            }
        }


        $track->delete();
        return to_route("tracks.index");
        
    }
}
