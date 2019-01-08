<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Final_mark extends Model
{
    //

    protected $fillable = [
        'project_id',
        'studentid',    
        'counter',
        'final_mark',
        
   ];
}
