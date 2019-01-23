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
       // $marks = MarkingSystem::all();
       
        $marks = DB::table('marking_systems')
                 ->select('id','project_id','student_id','category_one','category_two','supervisor_marks','total')              
                 ->get();

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

    public function scheduling(){
	   return view('admin/scheduling');
    }
    
    public function view_schedule(){
        
        $view_schedules=Scheduling::all();
        return view('admin/view_schedule',compact('view_schedules'));
     }


     public function edit_schedule($id){
        
        $view_schedule=Scheduling::findOrFail($id);
        return view('admin/edit_schedule',compact('view_schedule'));
     }



     public function update_schedule(Request $request, $id)
     {
         //
 
         $update_schedule = Scheduling::findOrFail($id);
 
         $update_schedule->update($request->all());

         $request->session()->flash('flash_message', 'Submitted successfully!');
 
         return redirect('/view_schedule');
 
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
                
                /*Update project_list table and send supervisor id to that table */
                DB::table('project_lists')
                ->where('project_id',$i)
                ->update(['personal_id' => $request->personal_id]);
            }

         $request->session()->flash('range_flash', 'Submitted successfully!');
         return redirect()->back();
    }


    public function store_two(Request $request)
    {
        
           $validatedData = $request->validate([

                'project_id' => 'max:10|unique:supervisor_students|  exists:project_lists,project_id',
                'personal_id' => 'required|max:10',
                'supervisor_name' => 'required',   
            ]);

          /*Send supervisor id to supervisor_students table */

          $post  = new SupervisorStudent();
          $post->project_id = $request->input("project_id");
          $post->personal_id = $request->input("personal_id");
          $post->supervisor_name = $request->input("supervisor_name");
          $post->save();

        /*Update project_list table and send supervisor id to that table */

           DB::table('project_lists')
           ->where('project_id',$post->project_id)
           ->update(['personal_id' => $post->personal_id]);
         
         $request->session()->flash('flash_message', 'Submitted successfully!');
         return redirect()->back();
    }


    public function store_three(Request $request)
    {
        
        $validatedData = $request->validate([

            'course_code' => 'unique:reg_infos',
            'semester' => 'unique:reg_infos',
             
        ]);

          $reg = new RegInfo();
          $reg->course_code = $request->input("course_code");
          $reg->semester = $request->input("semester");
          $reg->save();
            

         $request->session()->flash('reg_message', 'Submitted successfully!');

         return redirect()->back();
    }

    public function store_final(Request $request){

        $validatedData = $request->validate([

            'studentid'   => 'unique:final_marks',
            'counter'     => 'unique:final_marks',
            'final_mark'  => 'unique:final_marks',
           
        ]);

        foreach($request->project_id as $key => $v){

            $data = array(
            'project_id'=>$request->project_id [$key],   
            'studentid'=>$request->studentid [$key],
            'counter'=>$request->counter [$key],
            'final_mark'=>$request->final_mark [$key],
           );
           Final_mark::insert($data);

        }

          $request->session()->flash('result_message', 'Submitted successfully!');
          return redirect()->back();

    }

    public function store_schedule(Request $request)
    {
        
           $validatedData = $request->validate([

                'final_year' => 'required', 
                'fi_semester'=> 'required', 
                'fi_info'    => 'required',
                'fi_fr_date' => 'required',
                'fi_to_date' => 'required',
                'third_year' => 'required',
                'th_semester'=> 'required',
                'th_info'    => 'required',
                'th_fr_date' => 'required',
                'th_to_date' => 'required',
                'reg_fr_date'=> 'required',
                'reg_to_date'=> 'required',
                'result'     => 'required',
                'rs_date'    => 'required',
               
            ]);


          $schedule  = new Scheduling();
          $schedule->final_year = $request->input("final_year");
          $schedule->fi_semester = $request->input("fi_semester");
          $schedule->fi_info = $request->input("fi_info");
          $schedule->fi_fr_date = $request->input("fi_fr_date");
          $schedule->fi_to_date = $request->input("fi_to_date");
          $schedule->third_year = $request->input("third_year");
          $schedule->th_semester = $request->input("th_semester");
          $schedule->th_info = $request->input("th_info");
          $schedule->th_fr_date = $request->input("th_fr_date");
          $schedule->th_to_date = $request->input("th_to_date");
          $schedule->reg_fr_date = $request->input("reg_fr_date");
          $schedule->reg_to_date = $request->input("reg_to_date");
          $schedule->result = $request->input("result");
          $schedule->rs_date = $request->input("rs_date");
          $schedule->save();

         
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

        $request->session()->flash('flash_message', 'Submitted successfully!');

        return redirect()->back();


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
    public function view_marks($id)

    {

        $mark = MarkingSystem::findOrFail($id);

        return view('admin.view_marks',compact('mark')); 

    }

    public function update_marks(Request $request, $id)
    {
        //
        $mark = MarkingSystem::findOrFail($id);

        $mark->update($request->all());

        return redirect('/admin');

    }

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

        $request->session()->flash('flash_message', 'Updated successfully!');

        return redirect()->back();


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
