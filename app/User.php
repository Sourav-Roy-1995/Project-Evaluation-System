<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

         'personal_id',
         'name',
         'admin',
         'faculty',
         'student',
         'normal_user',
         'supervisor',
         'email', 
         'phone',
         'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isAdmin(){

        if($this->admin){
            return true;
        }

        return false;
    }


    public function isFaculty(){

        if($this->faculty){
            return true;
        }

        return false;
    }


    public function isStudent(){

        if($this->student){
            return true;
        }

        return false;
    }

    public function isNormal(){

        if($this->normal_user){
            return true;
        }

        return false;
    }

    public function isSupervisor(){

        if($this->supervisor){
            return true;
        }

        return false;
    }

    
}
