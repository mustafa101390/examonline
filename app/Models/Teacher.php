<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        'name', 'family', 'education' ,'image' , 'status' , 'about', 'course_type_id',
    ];

}
