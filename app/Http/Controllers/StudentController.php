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
use App\Project_Upload;
use Illuminate\Support\Facades\Validator;
use Session;



class StudentController extends Controller
{
    //

    public function __construct(){

       $this->middleware('IsStudent');
    }


    public function elligible_students(){

		$posts=StudentList::all();

		return view('elligible_students',compact('posts'));

	}


	public function view_supervisor() 

	{
	    $supervisorstudents = DB::table('supervisor_students')
        ->join('project_lists', function ($join) {
            $join->on('supervisor_students.project_id', '=', 'project_lists.project_id');          
                
        })

        ->select('supervisor_students.*','project_lists.course_code', 'project_lists.semester','project_lists.studentid_one','project_lists.studentid_two','project_lists.studentid_three')
        ->get();

     	return view('supervisor',compact('supervisorstudents'));
    }


    public function index(){

        $user = Auth::User();

        $personalproject = DB::table('project_lists')
        ->where('project_lists.studentid_one', '=', $user->personal_id)
        ->orWhere('project_lists.studentid_two', '=', $user->personal_id)
        ->orWhere('project_lists.studentid_three', '=', $user->personal_id)
        ->select('project_lists.project_name', 'project_lists.description','project_lists.course_code','project_lists.semester','project_lists.studentid_one','project_lists.studentid_two','project_lists.studentid_three')
        ->get();

        $pre_projects = DB::table('project__uploads')
        ->select('project__uploads.name', 'project__uploads.std_id','project__uploads.project_title','project__uploads.project_type','project__uploads.framework','project__uploads.project_txt')
        ->get();

		return view('student.index',compact('personalproject','pre_projects'));

    }
    
    public function project_upload(){
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


    public function store_project(Request $request)
    {
        
        $this->validate($request, [
            'name'=>'required',
            'std_id'=>'required',
            'project_title'=>'required',
            'project_type'=>'required',
            'framework'=>'required',
            'project_txt'=>'required'
        ]);
        
        $upload_project = new Project_Upload();

        if($request->hasFile('project_img')){
            $path = time().'.'.$request->project_img->getClientOriginalExtension();
            $request->project_img->move(public_path('images'), $path);
            $upload_project->project_img = $path;
        } //store project images

        $upload_project->name = $request->name; 
        $upload_project->std_id = $request->std_id;
        $upload_project->project_title = $request->project_title; 
        $upload_project->project_type = $request->project_type; 
        $upload_project->framework = $request->framework; 
        $upload_project->project_txt = $request->project_txt; 
        $upload_project->save(); 
        
        $request->session()->flash('flash_message', 'Submitted successfully!');
        return redirect()->route('student_panel');


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
