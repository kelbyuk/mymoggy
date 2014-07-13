@extends('layout.base')

@section('head')
<title>{{$cat->name}} Profile Page</title>
@stop

@section('main')
	<p>PROFILE cats name is {{$cat->name}}<br />
		Breed {{$cat->breed}}<br />
		Coat {{$cat->coat}}<br />
	</p>
	<p>
	<?php 
	if (Auth::check())
		{ 
			$userid = Auth::user()->id; 
			$catuserid = $cat->user_id;
			if ($userid == $catuserid) {
				echo "owner specific functions";
			}
		} 
	?>

	</p>
@stop

@section('footer')
	profile Footer goes here
@stop
