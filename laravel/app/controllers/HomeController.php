<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$lost = Incident::with(array('cat', 'cat.photos'=> function($query)	{$query->where('isprimaryphoto', '=', 1);}))->whereResolution(0)->orderBy("incidents.incidentdate", "desc")->take(5)->get();
		//$lost = Incident::with(array('cat', 'cat.photos'))->whereResolution(0)->orderBy("incidents.incidentdate", "desc")->take(5)->get();
		//original $lost = Incident::with(array('cat'))->whereResolution(0)->orderBy("incidents.incidentdate", "desc")->take(5)->get();


		$found = "";
		$safe = Incident::with(array('cat'))->whereResolution(1)->orderBy("incidents.incidentdate", "desc")->take(5)->get();
		//dd($lost);
		return View::make('home.index')->with('lost', $lost)->with('found', $found)->with('safe', $safe);
	} 
}


