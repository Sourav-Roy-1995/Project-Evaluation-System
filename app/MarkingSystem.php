<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkingSystem extends Model
{
    //
        protected $fillable = [

         'project_id',    
         'personal_id',
         'course_code',
         'semester',
         'student_id',
         'category_one',
         'category_two',
         'supervisor_marks',
         'total',
    ];

}
