<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_Upload extends Model
{
    //

    protected $fillable = [
        'name',    
        'std_id',
        'project_title',
        'project_type',
        'framework',
        'project_txt',
        'project_img',
   ];
}
