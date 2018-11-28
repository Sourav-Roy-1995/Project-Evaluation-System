<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\StudentList;
use App\User;
use App\ProjectList;
use App\RegInfo;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Session;


class ProjectListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

         $this->middleware('IsStudent');
    }



    public function index()
    {
        //
        $regs = RegInfo::all();
        return view('registration',compact('regs'));
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


            //$student_lists = DB::table('student_lists')   

            $validatedData = $request->validate([

                'project_name' => 'required|unique:project_lists',
                'description' => 'required',
                'course_code' => 'required',
                'semester' => 'required|exists:student_lists,semester',

                'studentid_one' => 
                'required|max:10|unique:project_lists|exists:student_lists,studentid',

                'studentid_two' => 'max:10',

                'studentid_three' =>'max:10'
                
                

            ]);


          
          $project_lists = new ProjectList;
          $project_lists->project_name = $request->input("project_name");
          $project_lists->description = $request->input("description");
          $project_lists->course_code = $request->input("course_code");
          $project_lists->semester = $request->input("semester");
          $project_lists->studentid_one = $request->input("studentid_one");
          $project_lists->studentid_two = $request->input("studentid_two");
          $project_lists->studentid_three = $request->input("studentid_three");
          $project_lists->save();


         
         $request->session()->flash('flash_message', 'registration done successfully!');
         return redirect('registration');
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
