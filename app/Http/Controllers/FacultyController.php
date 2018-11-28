<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\StudentList;
use App\User;
use App\ProjectList;
use App\SupervisorStudent;



class FacultyController extends Controller
{
    //

    public function __construct(){

    	 $this->middleware('IsFaculty');
    }

    public function index(){

    	$user = Auth::user();


		return view('faculty.index');
	}


}
