<?php

namespace App\Models;
use App\Models\Track;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $table="itians";

    function track(){
        return $this->belongsTo(Track::class);
    }

}
