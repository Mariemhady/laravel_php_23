<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTrackController;
use App\Http\Requests\UpdateTrackRequest;


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
        
        Track::create($request->all());
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
        //
        $track->update($request->all());
        return to_route("tracks.index");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        $track->delete();
        return to_route("tracks.index");
        
    }
}
