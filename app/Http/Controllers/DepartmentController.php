<?php

namespace App\Http\Controllers;

use Validator;
use App\Department;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DepartmentController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(){
			return view('staff.departments');
		}

		public function getDepartments(){
			/* Datatables  departments */
			$departments = Department::select(['id','name']);

			return Datatables::of($departments)->make(true);

		}




		##Vue axios function
		public function allDepartments(){
			$departments = Department::all();
			return $departments;
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
		public function store(Request $request){
			//dd($request->all());
			$validator = Validator::make($request->all(),[
				'name_d' => 'required',
				'section' => 'required'
			]);

			if($validator->fails()) {
      	return redirect()->back()->with('department-active',2)->withErrors($validator)->withInput();
    	}

    	$department = new Department();
      $department->name = $request->name_d;
      $department->save();
      $department->sections()->attach($request->section);

    	return back()->with(['department-save' => 1, 'department-active'=> 2]);

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
