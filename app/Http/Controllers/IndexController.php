<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedules = DB::table('schedulings')
        ->select('final_year','fi_semester','fi_info','fi_fr_date','fi_to_date','third_year','th_semester','th_info','th_fr_date','th_to_date','result','rs_date')
        ->get();


        $prev_projects=Project_Upload::all();
        $std_comments = Student_Comment::all();

         return view('index',compact('schedules','prev_projects','std_comments'));
    }


    public function prev_project()
    {
        //
        $pre_projects=Project_Upload::all();
        if($pre_projects->isEmpty()){
            echo "<script>
            alert('No Project Uploaded Yet...');
            window.location.href='http://localhost/final_year_project/public/';
            </script>";
        }
        return view('previous_project',compact('pre_projects'));
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
