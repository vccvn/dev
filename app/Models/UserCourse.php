<?php

namespace App\Models;
use Gomee\Models\Model;
class UserCourse extends Model
{
    public $table = 'user_courses';
    public $fillable = ['user_id', 'course_id'];

    
    
}
