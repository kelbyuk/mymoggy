<?php

class CatsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		echo ('cats index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	 echo "cat add form";
	 
		if (Auth::check())
		{
		echo " logged in";  // The user is logged in...
		$userid = Auth::user()->id; 
		return View::make('cats.add')->with('userid', $userid);

		} else {
		return Redirect::to('');
		}
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cat = Cat::find($id);
		if ($cat == Null){
			return Redirect::to('');
		} else {
			return View::make('cats.profiles.index')->with('cat', $cat);
		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		echo "edit cat";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		echo "delete";
	}

	/**
	*What to do if the cat is missing
	*/
	public function missing($id)
	{
		//
		echo "missing";
	}
	/**
	*display a poster
	*/
	public function poster($id)
	{
		//
		echo "show poster";
	}	/**
	*What to do if the cat is found
	*/
	public function home($id)
	{
		//
		echo "cat is home";
	}
}