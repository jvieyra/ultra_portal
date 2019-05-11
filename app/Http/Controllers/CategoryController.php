<?php

namespace App\Http\Controllers;


use Validator;
use App\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		return view('staff.categories');
	}

	public function jsonCategories(){
		$categories = Category::all();
		return $categories;
	}


	##datatables
	public function getCategories(){
		$categories = Category::select(['id','name']);
		//dd(Datatables::of($categories)->make(true));
		return Datatables::of($categories)
						->addColumn('action', function ($user) {
							return '<a href="'. route('categories.show',$user->id) .'" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="Edit">
	          			<i class="zmdi zmdi-edit txt-warning"></i></a>
	          			<a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete">
	          			<i class="zmdi zmdi-delete txt-danger"></i>
          			</a>';
            })
            ->make(true);
	}


	##Vue axios function
	public function allCategories(){
		$categories = Category::all();
		return $categories;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		
	}


	public function store(Request $request){
		$validator = Validator::make($request->all() , [
			'name' => 'required',
		]);

		if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}

		$section = new Category();
		$section->name = $request->name;
		$section->save();
		return back()->with('category-save',1);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id){
		$category = Category::find($id);
			return view('staff.categories.edit',compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id){
			
	}

	public function update(Request $request, $id){
		$validator = Validator::make($request->all() , [
			'name' => 'required',
		]);

		if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}

		$category = Category::find($id);
		$category->name = $request->name;
		$category->save();
		return back()->with('category-save',1);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id){
			//
	}
}
