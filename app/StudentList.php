<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentList extends Model
{
    //
       public $fillable = [
        	'studentid', 'studentname', 'semester','project_id','personal_id'
    	];



/*    public function user(){

    	return $this->belongsTo('App\ProjectList');
    }*/

    
}
