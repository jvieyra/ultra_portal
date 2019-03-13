<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Role;
use App\Section;
use App\Student;
use App\Building;
use App\Employee;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(){
			$departments = Department::all();
			$roles = Role::pluck('display_name','id');
			return view('staff.users',compact('departments','roles'));
		}

		//show menu campus
		public function campus(){
			$sections = Section::all();
			$buildings = Building::all();
			return view('staff.campus',compact('sections' ,'buildings' ));
		}

		##For searching users
		public function selectUsers(Request $request){
			//validar que solo sean usuarios que pueden recibir tickets
			$keyword = $request->keyword;
			
			/*$users = User::
								where('name','like','%'.$keyword.'%')
								->orWhere('email','like','%'.$keyword.'%')
								->orWhere('last_name','like','%'.$keyword.'%')
								->whereIn('allow_ticket','=',1)
								->select('id','name','email',
												'last_name','second_last_name',
												DB::raw('CONCAT(users.name, " | ", users.email) AS full_name'))
								->orderBy('name','asc')
								->get();*/

			$users = User::where('allow_ticket','=',1)
										->where('id','!=',Auth::user()->id)
										->select('id','name','email','last_name','second_last_name',
												DB::raw('CONCAT(users.name, " | ", users.email) AS full_name'))
										->orderBy('name','asc')
										->get();

			return ['users' => $users];
		}

	
		public function create()
		{
				//
		}

		
		public function store(CreateUserRequest $request){

			$user = new User();
			$user->name = $request->name;
			$user->email = $request->email;
			$user->last_name = $request->last_name;
			$user->second_last_name = $request->second_last_name;
			$user->nationality = $request->nationality;
			$user->birthday = $request->birthday;
			$user->gender = $request->gender;
			$gender = ($request->gender == 'F') ? "woman.png" : "man.png";
			$user->password = bcrypt($request->password);
			$user->department_id = $request->department_id;
			$user->image = $gender;
			$user->allow_ticket = $request->allow_ticket;

			$user->save();

			$employee = new Employee();
			$employee->user_id = $user->id;
			$employee->specific_position = $request->specific_position;
			$employee->save();

			$user->roles()->attach($request->roles);

			return back()->with('user-save',1);
			
		}

		##Model create students
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
			$gender = ($request->gender == 'F') ? "girl.png" : "boy.png";
			$user->image = $gender;
			$user->password = bcrypt($request->password);
			$user->department_id = $request->department_id;
			$user->image = $gender;
			$user->save();

			$allStudent = DB::table('students')->orderByRaw('id DESC')
                				->get()->first();
			
			$student = new Student;
			$student->id = $allStudent->id + 1;
			$student->user_id = $user->id;
			$student->homeroom = $request->grade . $request->group;
			$student->matricula = $request->matricula;
			$student->code = $request->matricula;
			$student->grade = $request->grade;
			$student->group = $request->group;

			$student->save();
			
			return back()->with('student-save',1);
			
		}


		public function show($id){
			$users = User::where('department_id',$id)->get();
			$data = [];
			$data[0] = [
				'id' => 0,
				'text' => 'Seleccione'
			];

			foreach($users as $key => $value){
				$data[$key + 1] = [
					'id' => $value->id,
					'text' => $value->name
				];
			}

			return response()->json($data);
			
		}

		public function edit($id){
				//
		}


		public function update(Request $request, $id){
				//
		}

		public function destroy($id){
				//
		}
}
