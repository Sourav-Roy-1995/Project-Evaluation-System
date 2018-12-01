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
use Illuminate\Support\Facades\Validator;
use Session;




class AdminController extends Controller
{
    //


    public function __construct(){

    	 $this->middleware('IsAdmin');

    }


    public function index(){

    	$posts=ProjectList::all();
        $userlists = User::all();
        $students=StudentList::all();
        $marks = MarkingSystem::all();


        $supervisorstudents = DB::table('supervisor_students')
        ->join('project_lists', function ($join) {
            $join->on('supervisor_students.project_id', '=', 'project_lists.project_id');
                
        })


        ->select('supervisor_students.*','project_lists.course_code', 'project_lists.semester','project_lists.studentid_one','project_lists.studentid_two','project_lists.studentid_three')
        ->get();


		return view('admin.index',compact('posts','userlists','students','supervisorstudents','marks'));

	}



	public function index_two(){

		return view('admin/index2');
	}

	public function index_three(){

		return view('admin/index3');
	}

	public function index_four(){

		return view('admin/index4');
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
        

            for($i = $request->start_input; $i <= $request->end_input; $i++){
                $data  = new SupervisorStudent();                
                $data->project_id = $i;
                $data->personal_id = $request->personal_id;
                $data->supervisor_name = $request->supervisor_name;
                $data->save();

                //Sends ID Password to User Table
                
                /*$dataUser  = new ProjectList();
                $dataUser->project_id = $i;
                $dataUser->save();*/
            }

         

         $request->session()->flash('flash_message', 'Submitted successfully!');

         return redirect()->back();
    }


    public function store_two(Request $request)
    {
        

            
           $validatedData = $request->validate([

                'project_id' => 'max:10|unique:supervisor_students|exists:project_lists,project_id',
                'personal_id' => 'required|max:10',
                'supervisor_name' => 'required',
               
            ]);


          $post  = new SupervisorStudent();
          $post->project_id = $request->input("project_id");
          $post->personal_id = $request->input("personal_id");
          $post->supervisor_name = $request->input("supervisor_name");
          $post->save();
         
         $request->session()->flash('flash_message', 'Submitted successfully!');

         return redirect()->back();
    }


    public function store_three(Request $request)
    {
        

          $reg = new RegInfo();
          $reg->course_code = $request->input("course_code");
          $reg->semester = $request->input("semester");
          $reg->save();
            

         $request->session()->flash('flash_message', 'Submitted successfully!');

         return redirect()->back();
    }


    public function view($project_id)

    {

        $post = ProjectList::findOrFail($project_id);

        $supervisors = User::all()->where('supervisor',1);

        return view('admin.view',compact('post','supervisors')); 

    }


    public function view_supervisor($id)

    {

        $supervisorstudent = SupervisorStudent::findOrFail($id);

        $supervisors = User::all()->where('supervisor',1);

        return view('admin.view_supervisor',compact('supervisorstudent','supervisors')); 

    }

    public function update_supervisor(Request $request, $id)
    {
        //

        $supervisorstudent = SupervisorStudent::findOrFail($id);

        $supervisorstudent->update($request->all());

        return redirect('/admin');


    }

    public function destroy_supervisor($id)
    {
        //
        $supervisorstudent = SupervisorStudent::findOrFail($id);
        $supervisorstudent->delete();

        return redirect('admin');
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
        $userlist = User::findOrFail($id);
        return view('admin.edit',compact('userlist')); 

    }


/*    public function edit_two($id)
    {
        //
        $supervisorlist = ProjectList::findOrFail($project_id);
        return view('admin.edit_two',compact('supervisorlist')); 

    }*/


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

        $userlist = User::findOrFail($id);

        $userlist->update($request->all());

        return redirect('/admin');


    }



/*    public function update_two(Request $request, $id)
    {
        //

        $supervisorlist = ProjectList::findOrFail($project_id);

        $supervisorlist->update($request->all());

        return redirect('/admin');


    }*/



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $userlist = User::findOrFail($id);

        $userlist->delete();

        return redirect('admin');
    }



}
