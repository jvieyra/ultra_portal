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
	Route::get('campus','UserController@campus')->name('campus.staff');

	Route::resource('users','UserController');
	Route::resource('sections','SectionController');
	Route::get('/dtsec','SectionController@getSections')->name('datatable.sections');

	Route::resource('departments','DepartmentController');
	Route::resource('buildings','BuildingController');
	Route::resource('places','PlaceController');

	/*afterschool admin*/
	Route::resource('workshops','WorkshopController');

});


Route::group(['prefix' => 'student'],function(){
	Route::get('home', 'StudentController@index')->name('home.student');
	Route::resource('workshops','StudentWorkshopController',[ 'as' => 'student']);
});


/*
$y = new App\Year;

dd($y->isCurrentYear(2));
*/






