<?php

namespace App\Http\Controllers;

use Validator;
use App\Section;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SectionController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(){
			//$sections = Section::paginate('5');
			//return view('staff.sections',compact('sections'));
			return view('staff.sections');

		}

		public function getSections(){
			/* Datatables */
			$sections = Section::select(['id','name']);
			return Datatables::of($sections)->make(true);
		}


		/*all sections axios Vue*/
		public function allSections(){
			$sections = Section::all();
			$data = [];
			$data[0] = [
				'id'=> 0,
				'text' => 'Seleccione',
			];

			foreach($sections as $key => $value){
				$data[$key + 1] = [
					'id' => $value->id,
					'text' => $value->name,
				];
			}
			return response()->json($data);
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
		public function store(Request $request) {
			
			$validator = Validator::make($request->all() , [
				'name' => 'required',
			]);

			if($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
      }

      $section = new Section();
      $section->name = $request->name;
      $section->save();
      return back()->with('section-save',1);
				
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id){
			
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
