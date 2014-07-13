@extends('layout.base')


@section('head')
<title>Cats Cats Cats</title>
@stop

@section('main')
	<?php 
	$url = URL::to('/');
	
	foreach($cat as $incident) { ?>
	<div class="listCat">
		{{$incident->cat->name}}<br />
		{{$incident->cat->id}}<br />
		{{$incident->narrative}}<br />
		<a href = "{{$url}}/cats/{{$incident->cat->id}}">profile</a><br /><br /><br /><br />
	</div>
	<?php } ?>
@stop

@section('footer')
	Footer goes here
@stop
