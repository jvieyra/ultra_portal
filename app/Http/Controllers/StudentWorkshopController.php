<?php

namespace App\Http\Controllers;

use App\User;
use App\Student;
use Validator;

use Illuminate\Http\Request;
use App\Rules\ThreeCheckboxes;
use Illuminate\Support\Facades\Auth;


class StudentWorkshopController extends Controller {

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index() {
			$user = Auth::user();
			$user = $user->students->first();
			//dd($user->matricula);
			$student = Student::findOrFail($user->matricula);
			return view('student.workshops',compact('user','student'));
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
			$user = Auth::user();
			$subjects = $request->all();
			$subjects =$subjects['subjects'];
			//dd($subjects['subjects']);
			$validator = Validator::make($request->all(),[
				'workshops' => ['required', new ThreeCheckboxes($subjects) ],
			]);

			if($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
      }

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
