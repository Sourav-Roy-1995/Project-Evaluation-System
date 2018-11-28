<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectList extends Model
{
    //
    protected $primaryKey = 'project_id';
    protected $fillable = [

         'project_id',
         'project_name',
         'description',
         'course_code',
         'personal_id',
         'semester',
         'studentid_one',
         'studentid_two',
         'studentid_three',
    ];


/*    public function projectid(){

        return $this->hasOne('App\StudentList');

    }*/

    
}
