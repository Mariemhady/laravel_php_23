<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
   private $students = [
        ["id" => "1", "name" => "ahmed", "img" => "pic1.png"],
        ["id" => "2", "name" => "ali", "img" => "pic2.png"],
        ["id" => "3", "name" => "mona", "img" => "pic3.png"],
    ];

    function studentList(){
        // return $this-> students;
        return view("Students.students", ["students" => $this-> students]);
    }

    function studentShow($id){
        foreach($this->students as $student){
            if($student["id"] == $id){
                // return $student;
                return view("Students.showStudent", ["std" => $student ]);

            };
        }
            return abort("404");
    }

    function home(){
        // return "HOME PAge";
        return view("Landing.home", ["name" => "PHP TRACK", "email" => "email@gmail.com"]);
    }


}
