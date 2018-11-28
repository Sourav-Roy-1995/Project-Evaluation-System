<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\StudentList;
use App\User;
use App\ProjectList;
use App\MarkingSystem;
use App\SupervisorStudent;
use Illuminate\Support\Facades\Validator;
use Session;



class SupervisorController extends Controller
{
    //




    public function __construct(){

    	 $this->middleware('IsSupervisor');
    }


    public function index(){

        $user = Auth::user();



		 $supervisorstudents = DB::table('supervisor_students')
        ->join('project_lists', function ($join) {
            $join->on('supervisor_students.project_id', '=', 'project_lists.project_id');
                
        })


        ->select('supervisor_students.*','project_lists.course_code', 'project_lists.semester','project_lists.studentid_one','project_lists.studentid_two','project_lists.studentid_three')
        ->get();

        return view('supervisor.index',compact('supervisorstudents'));

	}


    public function view($project_id)
    {
        //
        $supervisorstudents = ProjectList::findOrFail($project_id);
        return view('supervisor.view',compact('supervisorstudents')); 

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $validatedData = $request->validate([

                'project_id'        => 'required|max:10',
                'student_id'        => 'required|max:10',
                'personal_id'       => 'required|max:10',
                'course_code'       => 'required|max:10',
                'semester'          => 'required',
                'category_one'      => 'required',
                'category_two'      => 'required',
                'supervisor_marks'  => 'required',
                'total'             => 'required',

                
            ]);



          $marking = new MarkingSystem;
          $marking->project_id = $request->input("project_id");
          $marking->student_id = $request->input("student_id");
          $marking->personal_id = $request->input("personal_id");
          $marking->course_code = $request->input("course_code");
          $marking->semester = $request->input("semester");
          $marking->category_one = $request->input("category_one");
          $marking->category_two = $request->input("category_two");
          $marking->supervisor_marks = $request->input("supervisor_marks");
          $marking->total = $request->input("total");
          $marking->save();

          $request->session()->flash('flash_message', 'Submitted successfully!');
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
