<?php

namespace App\Models;

use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $fillable = ["name", "description", "image"];
    // protected $guraded = ["_token"]; // csrf_token

    function students(){
        return $this->hasMany(Student::class);
    }

}
