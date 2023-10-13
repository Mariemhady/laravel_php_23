<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get("/iti", function(){
//     return view("iti");
// });





// Route::get("/home", function(){
//     return "HELLO FROM ROUTES";
// });


// Route::get("/iti/students/{id}", function($id){
//     $students = [
//         ["id" => "1", "name" => "ahmed"],
//         ["id" => "2", "name" => "ali"],
//         ["id" => "3", "name" => "mona"],
//     ];
//     foreach($students as $student){
//         if($student["id"] == $id){
//             return $student;
//         };
//     }
//     return abort("404");
//     // return $students;
// });


use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ItistudentController;


Route::get("/iti/students/{id}", [StudentController::class, 'studentShow'])->name("student.show");

Route::get("/iti/students", [StudentController::class, 'studentList'])->name("iti.students");

Route::get("/iti/home", [StudentController::class, "home"]);

Route::get("/posts", [PostController::class, "postsList" ]);

// _________________ ITI Students Controller __________________

Route::get("/students/create", [ItistudentController::class, "create"])->name("students.create");

Route::get("/students", [ItistudentController::class, "index"])->name("students.list");

Route::get("/students/{id}", [ItistudentController::class, "show"])->name("students.show");

Route::get("/students/delete/{id}", [ItistudentController::class, "destroy"])->name("students.delete");


Route::post("/studentsstore", [ItistudentController::class, "store"])->name("students.store");


Route::get("/studentsedit/{id}", [ItistudentController::class, "edit"])->name("students.edit");


Route::put("/studentsupdate/{id}", [ItistudentController::class, "update"])->name("students.update");
