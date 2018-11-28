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
		Route::get('editsupervisor/{project_id}/view_supervisor','AdminController@view_supervisor')->name('admin.view_supervisor');

		Route::post('store_two','AdminController@store_two')->name('admin.store');
		Route::post('store_three','AdminController@store_three')->name('admin.store');

		

	    //Main Admin Route List:
		

		//Faculty Route List
		Route::get('/faculty','FacultyController@index')->name('faculty');;
		//Faculty Route List


		//Students Route List:
		Route::get('/elligible_student','StudentController@index');
		//Students Route List:

		//Normal User loginPage
		Route::get('/index','NormalController@index');
		//Normal User loginPage

		//Supervisor LoginPage
		Route::resource('/supervisor','SupervisorController');
		Route::get('/marking/{project_id}/view','SupervisorController@view')->name('supervisor.view');
		//Supervisor LoginPage


		//Supervisor list
		Route::get('/supervisorlist','StudentController@index2');
		//Supervisor list


		Route::resource('/registration','ProjectListController');

		  



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