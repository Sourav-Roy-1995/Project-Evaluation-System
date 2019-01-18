<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Comment extends Model
{
    //

    protected $fillable = [
        'name',    
        'stdnt_id',
        'status',
        'comment',
        'personal_img'
   ];
}
