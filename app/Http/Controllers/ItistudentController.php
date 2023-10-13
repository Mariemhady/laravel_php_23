<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ItistudentController extends Controller
{
    function index(){
        $students = Student::all(); // select * from students 
        // dd($students); // dump and die 
        return view("ITI.Students.index", ['data' => $students]);
    }

    function show($id){
        // dd($id);
        $student = Student::findorfail($id);
        // dd($student);
        return view("ITI.Students.show", ["data" => $student]);
    }

    function destroy($id){
        // dd($id);
        $student = Student::findorfail($id);
        $student->delete();
        return to_route('students.list');
    }


    function create(){
        return view("ITI.Students.create");
    }

    function store(){
        $data = request();
        $name = request()->get('name'); // get the value from the input called name 
        $email = request()->get('email');
        $image = request()->get('image');
        $grade = request()->get('grade');
        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->image = $image;
        $student->grade = $grade;
        $student->save(); 
        return to_route('students.list');
    }


    function edit($id){
        $student = Student::findorfail($id);
        return view("ITI.Students.edit", ["data" => $student ]);
    }

    function update($id){
        $student= Student::findorfail($id);
        $student->name = request("name");
        $student->email = request("email");
        $student->grade = request("grade");
        $student->image = request("image");
        $student->update();
        return to_route('students.list');
    }
}
