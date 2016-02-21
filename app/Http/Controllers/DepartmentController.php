<?php namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$departments = Department::all();
		return view('departments.index', compact('departments'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('departments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$department = new Department();
		$data = Input::all();
		$validator = Validator::make($data, Department::$rules);
		if($validator->fails()){
			$errors = $validator->errors();
			return Redirect::to('departments.create',compact('errors'));
		}else{
			$department->fill($data);
			$department->save();
			return Redirect::to('departments');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$d = Department::findOrFail($id);

		return view('departments.show',compact('d'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$d = Department::findOrFail($id);
		return view('departments',compact('d'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$d = Department::findOrFail($id);
		$data = Input::all();
		$d->fill($data);
		$d->save();
		return Redirect::to('depàrtments');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$d = Department::find($id);
		$d->delete();
		return Redirect::to('depàrtments');

	}



}
