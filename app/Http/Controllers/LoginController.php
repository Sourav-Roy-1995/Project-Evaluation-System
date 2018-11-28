<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User;



class LoginController extends Controller
{
    //

     public function login(Request $request){

    	//dd($request->all());
    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' => $request->password

    	]))

    	{

    		$user = User::where('email', $request->email)->first();

    		if($user->isAdmin()){

    			return redirect('admin'); 
    		}

            else if($user->isFaculty()){

                return redirect('faculty');; 
            }

            else if($user->isStudent()){

                return redirect('elligible_student'); 
            }

            else if($user->isNormal()){

                return redirect('index'); 
            }

            else if($user->isSupervisor()){

                return redirect('supervisor'); 
            }

    	}

    	return redirect()->back(); 
    }

}
