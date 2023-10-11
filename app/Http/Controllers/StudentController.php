<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
   private $students = [
        ["id" => "1", "name" => "ahmed"],
        ["id" => "2", "name" => "ali"],
        ["id" => "3", "name" => "mona"],
    ];

    function studentList(){
        // return $this-> students;
        return view("students", ["students" => $this-> students]);
    }

    function studentShow($id){
        foreach($this->students as $student){
            if($student["id"] == $id){
                // return $student;
                return view("showStudent", ["std" => $student ]);

            };
        }
            return abort("404");
    }

    function home(){
        // return "HOME PAge";
        return view("home", ["name" => "PHP TRACK", "email" => "email@gmail.com"]);
    }


}
