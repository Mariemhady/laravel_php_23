<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Track;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ItistudentController extends Controller
{

    // function __construct(){
    //     // $this->middleware('auth')->only(["store", "destroy", "edit", "show","create"]);
    //     $this->middleware("auth")->except(["index", "show"]);
    // }


    function index(){
        $students = Student::all(); 
        return view("ITI.Students.index", ['data' => $students]);
    }

    function show($id){
        if(Gate::allows("is-admin")){
            $student = Student::findorfail($id);
            return view("ITI.Students.show", ["data" => $student]);
        }
        return abort(403);
    }

    function destroy($id){
        if(Gate::allows("is-admin")){
            $student = Student::findorfail($id);
            $student->delete();
            return to_route('students.list');
        }
        return abort(403);
    }


    function create(){
        dump(Auth::id());
        $tracks = Track::all();
        return view("ITI.Students.create", ["data" => $tracks]);
    }

    function store(){
        request()->validate([
            "name" => "required|min:3",
            "email" => "required"
        ],[
            "name.required"=> "Student Name is Required",
            "email.required"=> "Student Email is Required",
            "name.min" => "Student Name must be more than 2 chars"
        ]
    );
        $request_data = request()->all();
        $request_data['user_id'] = Auth::id();
        $student = Student::create($request_data);
        return to_route('students.list');
    }


    function edit($id){
        $student = Student::findorfail($id);
        return view("ITI.Students.edit", ["data" => $student ]);
    }

    function update($id, Student $student){
        $student = Student::findorfail($id);
        // dd($student->user_id);//3
        // dd(auth()->user()->id); // 3


        if(auth()->user()->id == $student->user_id){
            $student= Student::findorfail($id);
        $student->name = request("name");
        $student->email = request("email");
        $student->grade = request("grade");
        $student->image = request("image");

        request()->validate([
            "name" => "required|min:3",
            "email" => "required"
        ],[
            "name.required"=> "Student Name is Required",
            "email.required"=> "Student Email is Required",
            "name.min" => "Student Name must be more than 2 chars"
        ]
    );
        $student->update();
        return to_route('students.list');
        };

        abort(403);

        

        
    }
}
