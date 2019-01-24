<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Workshop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkshopController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		$user = Auth::user();
		return view('staff.workshop.create',compact('user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){

		$validator = Validator::make($request->all(),[
			'name' => 'required',
			'description' => 'required',
			'picture' => 'image'
		]);

		if($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
    }

    if($request->hasFile('picture')){
			//dd($request->file('picture')->originalName);
			$file =  $request->file('picture')->store('/workshops');
		}

		/*
		if(!isset($workshop->picture)){
			$workshop = new Workshop;
			$workshop->name = $request->name;
			$workshop->description = $request->description;
			$workshop->picture = "base_workshop.jpg";
		}else{
			$workshop = Workshop::create($request->all());
		}*/

		$workshop = Workshop::create($request->all());
		$workshop->save();
		
		/*
		$workshop->name = $request->name;
		$workshop->description = $request->description;
		if(!isset($workshop->picture)){
			$workshop->picture = "base_workshop.jpg";
		}*/


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
