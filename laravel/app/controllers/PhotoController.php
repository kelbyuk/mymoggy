<?php

class PhotoController extends \BaseController {
	public function __construct()
	{
	//echo 'spanky times';
	//does cat belong to logged in user?
	


	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		echo 'photo index';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		//
		if (Auth::check())
		{
		echo " logged in";  // The user is logged in...

		$cat = Cat::find($id);
		//echo $cat;
		$user = $cat->user_id;
		echo "user is ".$user;
		//echo $cat->owner_id;
		}



/*	$userid = Auth::user()->id; 
		return View::make('cats.add')->with('userid', $userid);

		} else {
		return Redirect::to('');
		}

		echo ' adding new photo '.$catid;
		return View::make('photos.photo')->with('catid', $catid);	


		*/
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
	public function show($catid,$photoid)
	{
		//
		echo $catid.' '.$photoid;
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
	}

}