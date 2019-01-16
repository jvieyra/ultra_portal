<?php

namespace App\Http\Controllers;

use App\User;
use App\Student;
use App\Subject;
use App\WorkshopTemp;
use App\WorkshopEnrollment;
use App\Year;
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
			$year = new Year();
			$currentYear = $year->currentYear();
			$subjects = $request->all();
			$countSubjects = $subjects['subjects'];
			
			$validator = Validator::make($request->all(),[
				'workshops' => ['required', new ThreeCheckboxes($countSubjects) ],
			]);

			if($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
      }

      $workshopTemp = new WorkshopTemp();
      $saveTemp = $workshopTemp->saveWorkshopsTemp($subjects['workshops'],$user);
      
      if($saveTemp){
      	//save subject workshop winner!
      	$student = Student::find($user->student->code);
      	$selectWorkshop = $student->selectWorkshop($subjects['workshops']);

      	if($selectWorkshop){
      		$inscription = new WorkshopEnrollment;
      		$inscription->matricula = $student->code;
      		$inscription->subject_id = $selectWorkshop;
      		$inscription->year_id = $currentYear;
      		$inscription->save();
      		//return vista con el taller elegido.
      		return redirect()->route('student.workshops.show',$selectWorkshop);

      	}else{
      		return back()->with('fullError', 'Error! Ya no existe cupo para las clases que seleccionaste.Flamenco, tenis, futbol');
      	}
      	
      }

		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id){
			$user = Auth::user();
			$subject = Subject::find($id);
			
			return view('student.show-workshop',compact('user','subject'));
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
