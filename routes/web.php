<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\StudentList;
use App\User;


Route::get('/', function () {
    return view('index');
});

Route::get('test',function(){

		$marks = DB::table('marking_systems')
        ->select('student_id','category_one','category_two','supervisor_marks','total',DB::raw('count(*) as total'))   
		->groupBy('student_id','category_one','category_two','supervisor_marks','total') 
		->orderBy('total','DESC')        
		->get();
		dd($marks);
		
});

Route::get('/contact',function(){
	return view('contact');
});


//Custom Login Page
Route::post('/login/custom',[

	'uses' => 'LoginController@login',

	'as' => 'login.custom'  //Name of this route define in login.blade.php

]);
Route::get('logout', 'Auth\LoginController@logout');
//Custom Login Page


//Authenticated logIn
Route::group(['middleware'=>'auth'],function(){


	 	//Main Admin Route List:

		Route::resource('/admin','AdminController');

		Route::get('/index2','AdminController@index_two' );

		Route::get('/index3','AdminController@index_three');

		Route::get('/index4','AdminController@index_four');

		Route::get('insertsupervisor/{project_id}/view','AdminController@view')->name('admin.view');
		Route::get('editsupervisor/{id}/view_supervisor','AdminController@view_supervisor')->name('admin.view_supervisor');
		Route::patch('editsupervisor/{id}','AdminController@update_supervisor')->name('admin.update_supervisor');
		Route::DELETE('deletesupervisor/{id}','AdminController@destroy_supervisor')->name('admin.delete_supervisor');

		Route::get('viewmark/{id}/view','AdminController@view_marks')->name('admin.view_mark');
		Route::patch('editmark/{id}','AdminController@update_marks')->name('admin.update');

		Route::post('store_two','AdminController@store_two')->name('admin.store');
		Route::post('store_three','AdminController@store_three')->name('admin.store');		

	    //Main Admin Route List:
		

		//Faculty Route List
		Route::get('/faculty','FacultyController@index')->name('faculty');;
		//Faculty Route List


		//Students Route List:
		Route::get('/elligible_student','StudentController@index');
		Route::get('/supervisorlist','StudentController@index2');
		Route::post('/getans','StudentController@getAns')->name('student.getans');
		//Students Route List:

		//Normal User loginPage
		Route::get('/index','NormalController@index');
		//Normal User loginPage

		//Supervisor LoginPage
		Route::resource('/supervisor','SupervisorController');
		Route::get('/marking/{project_id}/view','SupervisorController@view')->name('supervisor.view');
		Route::get('/marks_store',array('as'=>'marks_store','uses'=>'SupervisorController@marks_store'));
		Route::post('/insert',array('as'=>'supervisor.insert',
		'uses'=>'SupervisorController@insert'));
		//Supervisor LoginPage



		//Reg 
		Route::resource('/registration','ProjectListController');
		//Reg 

		  



		Route::get('admin/user/roles', ['middleware'=>'role',function(){

		}]);

/*
		Route::get('/marking',function(){

			return view('marking');

		});*/

});

//Authenticated logIn



/*EXCEL FILE UPLOAD*/
Route::get('importExport', 'MaatwebsiteDemoController@importExport');

Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');

Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
/*EXCEL FILE UPLOAD*/





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');