<?php

class CatController extends BaseController {

	public function getIndex()
	{
		return View::make('cats.index');
		
	}
	
	public function getLost($pcode)
	{
		echo "lost Postcode {$pcode}";
		$lost = Incident::with(array('cat'))->whereResolution(0)->wherePcode($pcode)->get();
		return View::make('cats.index')->with('cat', $lost);

	}
	
	public function getFound($pcode)
	{
		echo "found Postcode {$pcode}";
	}
	
	public function getSafe($pcode)
	{
		echo "safe Postcode {$pcode}";
		$safe = Incident::with(array('cat'))->whereResolution(1)->wherePcode($pcode)->get();
		return View::make('cats.index')->with('cat', $safe);
	}
	public function getProfile($catid)
	{
		$cat = Cat::find($catid);
		if ($cat == Null){
			return Redirect::to('');
		} else {
			return View::make('cats.profiles.index')->with('cat', $cat);
		}
	}
	public function getAdd()
	{
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
	
	public function postAdd()
	{
	echo "posting Add form";
	
		$cat = array(
			'user_id' => Input::get('user_id'),
			'name' => Input::get('name'),
			'breed' => Input::get('breed'),
			'coat' => Input::get('coat'),
			'sex' => Input::get('sex'),
			'altered' => Input::get('altered'),
			'collar' => Input::get('collar'),
			'chipserial' => Input::get('chipserial'),
			'dob' => Input::get('dob'),
			'colour' => Input::get('colour'),
			'markings' => Input::get('markings'),
			'personality' => Input::get('personality')
		);
		Cat::create($cat);
		return Redirect::to('dashboard');
	}

		
	
	
	public function getEdit($catid)
	{
		echo "cat edit form";

	}
	
	
	public function postEdit($catid)
	{
		
	}

}
