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
use App\Student_Comment;
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

    
    public function view_result() 

	{
        $user = Auth::User();

	    $view_result = DB::table('final_marks')
        ->join('project_lists', function ($join) {
            $join->on('final_marks.project_id', '=', 'project_lists.project_id');        
        })
        ->where('final_marks.studentid', '=', $user->personal_id)
        ->select('final_marks.studentid','project_lists.project_name', 'project_lists.course_code','project_lists.semester','final_marks.final_mark')
        ->get();

     	return view('student.result',compact('view_result'));
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


    public function project_upload(){
	    return view('student.project_upload');
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
        return redirect()->route('project_upload');

    }
    
    public function comment_view(){
	    return view('student.student_comment');
    }

    public function store_comments(Request $request)
    {    
        $this->validate($request, [
            'name'=>'required',
            'stdnt_id'=>'required',
            'status'=>'required',
            'comment'=>'required'
        ]);
        
        $leave_comment = new Student_Comment();

        if($request->hasFile('personal_img')){
            $path = time().'.'.$request->personal_img->getClientOriginalExtension();
            $request->personal_img->move(public_path('images'), $path);
            $leave_comment->personal_img = $path;
        } //store personal images

        $leave_comment->name = $request->name; 
        $leave_comment->stdnt_id = $request->stdnt_id;
        $leave_comment->status = $request->status; 
        $leave_comment->comment = $request->comment; 
        $leave_comment->save(); 
        
        $request->session()->flash('comment_flash', 'Submitted successfully!');
        return redirect()->route('comment_view');
    }

    public function getAns(Request $request){

        $student_id = StudentList::where('studentid', '=', $request->input('personal_id'))->exists();

        if( $student_id == true)
        {
              
            echo "<script>
            alert('You are allowed for project...');
            window.location.href='http://localhost/final_year_project/public/';
            </script>";

        }

        else
        {
            echo "<script>
            alert('You are not allowed for project...');
            window.location.href='http://localhost/final_year_project/public/';
            </script>";
        }

    }






}
