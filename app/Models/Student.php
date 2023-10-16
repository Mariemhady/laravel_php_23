<?php

namespace App\Models;
use App\Models\Track;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ["name", "email", "image", "track_id", "grade", "user_id"];

    // protected $table="itians";

    function track(){
        return $this->belongsTo(Track::class);
    }

}
