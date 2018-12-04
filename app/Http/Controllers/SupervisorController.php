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

    public function marks_store(Request $request)
    {
        //
        $data = MarkingSystem::select('total')->where('project_id',$request->project_id)->first();
        return response()->json($data);

        
    }

    public function insert(Request $request){

        $validatedData = $request->validate([

            'project_id'        => 'required',
            'personal_id'       => 'required',
            'course_code'       => 'required',
            'semester'          => 'required',
            'student_id'        => 'required',
            'category_one'      => 'required',
            'category_two'      => 'required',
            'total'             => 'required',
           
        ]);


        foreach($request->project_id as $key => $v){

            $data = array(
            'project_id'=>$request->project_id [$key],
            'personal_id'=>$request->personal_id [$key],
            'course_code'=>$request->course_code [$key],
            'semester'=>$request->semester [$key],
            'student_id'=>$request->student_id [$key],
            'category_one'=>$request->category_one [$key],
            'category_two'=>$request->category_two [$key],
            'supervisor_marks'=>$request->supervisor_marks [$key],
            'total'=>$request->total [$key],
           );
            MarkingSystem::insert($data);

        }

          $request->session()->flash('flash_message', 'Submitted successfully!');
          return redirect()->back();

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
