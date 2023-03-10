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



//Index Controller:
Route::resource('/','IndexController');
Route::get('/prev_project','IndexController@prev_project');
//Index Controller:


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

		Route::get('/index2','AdminController@index_two');

		Route::get('/index3','AdminController@index_three');

		Route::get('/index4','AdminController@index_four');

		Route::get('insertsupervisor/{project_id}/view','AdminController@view')->name('admin.view');
		Route::get('editsupervisor/{id}/view_supervisor','AdminController@view_supervisor')->name('admin.view_supervisor');
		Route::patch('editsupervisor/{id}','AdminController@update_supervisor')->name('admin.update_supervisor');

		Route::DELETE('deletesupervisor/{id}','AdminController@destroy_supervisor')->name('admin.delete_supervisor');

		Route::DELETE('deleteproject/{id}','AdminController@destroy_project')->name('admin.delete_project');

		Route::DELETE('deleteschedule/{id}','AdminController@destroy_schedule')->name('admin.delete_schedule');

		Route::DELETE('deletemark/{id}','AdminController@destroy_mark')->name('admin.delete_mark');

		Route::DELETE('deletepreproject/{id}','AdminController@destroy_preproject')->name('admin.deletepreproject');

		Route::get('viewmark/{id}/view','AdminController@view_marks')->name('admin.view_mark');

		Route::patch('editmark/{id}','AdminController@update_marks')->name('admin.update');

		Route::post('store_two','AdminController@store_two')->name('admin.store');
		Route::post('store_three','AdminController@store_three')->name('admin.store');	
		
		Route::post('store_final','AdminController@store_final')->name('admin.store_final');

		Route::get('scheduling','AdminController@scheduling')->name('admin.schedule');
		Route::post('store_scheduling','AdminController@store_schedule')->name('admin.store_schedule');

		Route::get('view_schedule','AdminController@view_schedule');

		Route::get('edit_schedule/{id}/edit','AdminController@edit_schedule')->name('schedule.edit');
		Route::patch('update_schedule/{id}','AdminController@update_schedule')->name('schedule.update');

		Route::get('view_prevproject','AdminController@view_prevproject');

	    //Main Admin Route List:
		

		//Faculty Route List
		Route::get('/faculty','FacultyController@index')->name('faculty');;
		//Faculty Route List


		//Students Route List
		Route::get('/elligible_student','StudentController@elligible_students');
		Route::get('/supervisorlist','StudentController@view_supervisor');
		Route::get('/student_panel','StudentController@index')->name('student_panel');
		Route::get('/project_upload','StudentController@project_upload')->name('project_upload');
		Route::get('/comment_view','StudentController@comment_view')->name('comment_view');
		Route::get('/sp_profile','StudentController@sp_profile')->name('sp_profile');
		Route::get('/view_result','StudentController@view_result')->name('view_result');
		Route::post('store_project','StudentController@store_project')->name('project.store');
		Route::post('store_comments','StudentController@store_comments')->name('store_comments');
		Route::post('getans','StudentController@getAns')->name('student.getans');
		//Students Route List

		//Normal User loginPage
		Route::get('/index','NormalController@index');
		//Normal User loginPage

		//Supervisor LoginPage
		Route::resource('/supervisor','SupervisorController');
		Route::get('/marking/{project_id}/view','SupervisorController@view')->name('supervisor.view');
		Route::get('/marks_store',array('as'=>'marks_store','uses'=>'SupervisorController@marks_store'));
		Route::post('/insert',array('as'=>'supervisor.insert',
		'uses'=>'SupervisorController@insert'));
		Route::get('/view/{project_id}/view_project','SupervisorController@view_project')->name('supervisor.view_project');
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