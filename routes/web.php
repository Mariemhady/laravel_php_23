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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/iti", function(){
    return view("iti");
});





Route::get("/home", function(){
    return "HELLO FROM ROUTES";
});


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

Route::get("/iti/students/{id}", [StudentController::class, 'studentShow']);

Route::get("/iti/students", [StudentController::class, 'studentList']);

Route::get("/iti/home", [StudentController::class, "home"]);

Route::get("/posts", [PostController::class, "postsList" ]);