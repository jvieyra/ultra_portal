<?php

namespace App\Http\Controllers;


use App\User;
use Validator;
use App\Section;
use App\Student;
use App\Building;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(){
			$departments = Department::all();
			return view('staff.users',compact('departments'));
		}

		//show menu campus
		public function campus(){
			$sections = Section::all();
			$buildings = Building::all();
			return view('staff.campus',compact('sections' ,'buildings' ));
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

			
		}

		public function storeStudents(Request $request){

			$validator = Validator::make($request->all() , [
				'name' => 'required',
				'last_name' => 'required',
				'birthday' => 'required|date',
				'gender' => 'required',
				'nationality' => 'required',
				'department_id' => 'required',
				'grade' => 'required',
				'group' => 'required',
				'matricula' => 'required',
				'email' => 'required',
				'password' => 'required|confirmed|min:6',
			]);

			if($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
      }


			$user = new User;
			$user->name = $request->name;
			$user->email = $request->email;
			$user->last_name = $request->last_name;
			$user->second_last_name = $request->second_last_name;
			$user->nationality = $request->nationality;
			$user->birthday = $request->birthday;
			$user->gender = $request->gender;
			$user->password = bcrypt($request->password);
			$user->department_id = $request->department_id;
			$user->save();

			//$allStudent = DB::table('students');

			$allStudent = DB::table('students')->orderByRaw('id DESC')
                				->get()->first();
			//dd($allStudent->id);
			$student = new Student;
			$student->id = $allStudent->id + 1;
			$student->user_id = $user->id;
			$student->homeroom = $request->grade . $request->group;
			$student->matricula = $request->matricula;
			$student->code = $request->matricula;
			$student->grade = $request->grade;
			$student->group = $request->group;

			$student->save();
			//dd($user->id);
			return back()->with('student-save',1);
			
		}

		/**password
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
