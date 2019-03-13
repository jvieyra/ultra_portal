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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'staff'],function(){
	Route::get('home', 'EmployeeController@index')->name('home.employee');
	##config Admin
	Route::get('campus','UserController@campus')->name('campus.staff');
	Route::get('config-tickets','TicketController@ticketAdmin')->name('tickets.config');



	##users-students
	Route::resource('users','UserController');
	Route::post('createStudents','UserController@storeStudents')->name('create-students');
	Route::get('selectUsers','UserController@selectUsers');



	##categories
	Route::resource('categories','CategoryController');

	##sections
	Route::resource('sections','SectionController');
	Route::get('/dtsec','SectionController@getSections')->name('datatable.sections');
	Route::get('get-sections','SectionController@allSections');

	##departments
	Route::resource('departments','DepartmentController');
	Route::get('/dtdep','DepartmentController@getDepartments')->name('datatable.departments');
	Route::get('get-departments','DepartmentController@allDepartments');
	

	##buildings
	Route::resource('buildings','BuildingController');
	Route::resource('places','PlaceController');

	##tickets
	Route::resource('tickets','TicketController');
	Route::get('charts-tickets','TicketController@charts')->name('tickets.charts');

	##students
	Route::get('crear-plan','StudentController@createPlanStudent')->name('crear-plan');
	Route::post('planStudent','StudentController@planStudent')->name('plan-student.create');

	##afterschool admin
	Route::resource('workshops','WorkshopController');

});

Route::group(['prefix' => 'student'],function(){
	Route::get('home', 'StudentController@index')->name('home.student');
	Route::resource('workshops','StudentWorkshopController',[ 'as' => 'student']);
});










