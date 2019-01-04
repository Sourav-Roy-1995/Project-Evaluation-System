<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\StudentList;
use App\User;
use App\ProjectList;
use App\SupervisorStudent;
use App\RegInfo;
use App\MarkingSystem;
use App\Final_mark;
use App\Scheduling;
use Session;



class StudentController extends Controller
{
    //

    public function __construct(){

       $this->middleware('IsStudent');
    }


    public function index(){

		$posts=StudentList::all();

		return view('elligible_students',compact('posts'));

	}


	public function index2() 

	{
		
	    $supervisorstudents = DB::table('supervisor_students')
        ->join('project_lists', function ($join) {
            $join->on('supervisor_students.project_id', '=', 'project_lists.project_id');          
                
        })

        ->select('supervisor_students.*','project_lists.course_code', 'project_lists.semester','project_lists.studentid_one','project_lists.studentid_two','project_lists.studentid_three')
        ->get();

     	return view('supervisor',compact('supervisorstudents'));

    }


    public function index3(){

        $user =Auth::User();

        $personalproject = DB::table('project_lists')

        ->where('project_lists.studentid_one', '=', $user->personal_id)
        ->orWhere('project_lists.studentid_two', '=', $user->personal_id)
        ->orWhere('project_lists.studentid_three', '=', $user->personal_id)
        ->select('project_lists.project_name', 'project_lists.description','project_lists.course_code','project_lists.semester','project_lists.studentid_one','project_lists.studentid_two','project_lists.studentid_three')
        ->get();

		return view('student.index',compact('personalproject'));

    }
    
    public function index4(){
	    return view('student.project_upload');
    }

    public function sp_profile(){

        $user =Auth::User();

        $personalsupervisor = DB::table('users')
        ->join('project_lists', function ($join) {
            $join->on('users.personal_id', '=', 'project_lists.personal_id');          
        })
        ->where('project_lists.studentid_one', '=', $user->personal_id)
        ->orWhere('project_lists.studentid_two', '=', $user->personal_id)
        ->orWhere('project_lists.studentid_three', '=', $user->personal_id)
        ->select('users.*','project_lists.project_name', 'project_lists.description','project_lists.course_code','project_lists.semester','project_lists.studentid_one','project_lists.studentid_two','project_lists.studentid_three')
        ->get();

	    return view('student.supervisor_profile',compact('personalsupervisor'));
    }
    
    public function getAns(){

        $getans = StudentList::where([
            ['studentid', '=' ,$request->studentid],
            ['studentname', '=', $request->studentname],
            ['semester', '=', $reqest->semester]
        ])->first();
        
        if (count($getans) > 0) {
            Session::flash('alert-info', 'You are elligible for project');
            return redirect('/');
        } else {        
            Session::flash('alert-danger', 'You are not elligible for project');
            return redirect('/');
        }

    }






}
