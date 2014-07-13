<?php

class DashboardController extends BaseController {

	public function showDashboard()
	{
		$userid = Auth::user()->id;
		$user = User::find($userid);
		//$cats = Cat::where('user_id', '=', $userid)->get(); 
		$cats = Cat::whereUser_id($userid)->get();
		//$cats = Cat::with(array('incidents'))->where('owners_id', '=', $userid)->get();
		//$cats = Cat::with(array('incidents'))->where('user_id', '=', $userid)->get(); 
		$photos = Photo::whereUser_id($userid)->get();
		
		return View::make('dashboard.index')->with('user', $user)->with('cats', $cats)->with('photos', $photos);	
				//$lost = Incident::with(array('cat'))->whereResolution(0)->wherePcode($pcode)->get();
	
	}
	

	
}