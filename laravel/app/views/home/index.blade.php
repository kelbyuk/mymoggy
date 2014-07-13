@extends('layout.base')

@section('head')
	{{ HTML::style('css/owl.carousel.css') }}
	{{ HTML::style('css/owl.theme.css') }}
	{{ HTML::style('css/owl.transitions.css') }}
	<title>My Moggy UK's lost and found cats. § homepage</title>
@stop

@section('top')
	<?php
		$url = URL::to('/');
	?>
	<div class='block-wrap'>
	    <div id="moggy-story" class="owl-carousel owl-theme">	     
		    <div class="item"><img src="assets/image1.png" alt="The Last of us"></div>
	        <div class="item"><img src="assets/image2.png" alt="GTA V"></div>
	        <div class="item"><img src="assets/image3.png" alt="Mirror Edge"></div>
	    </div>
	</div>
@stop

@section('main')
	<!-- cat displays -->
	<article class="cat-article trbackground"> <!-- lost cats -->
		<header>Lost Cats</header>
        <img class="heroimage rounded ui image" src="/assets/lostcats.png">
		<?php 
			foreach($lost as $incident) { ?>
			<div  class='homepage-cat-block'>
				<img class="rounded ui image" src="/photos/{{$incident->cat->user_id}}/{{$incident->cat->id}}/{{$incident->cat->photos[0]->filename}}"> 
				<a href = "{{$url}}/cats/{{$incident->cat->id}}">{{$incident->cat->name}}</a>	
			</div>		
		<?php } ?>
	</article>
	<article class="cat-article trbackground"> <!-- found cats / still to do -->
		<header>Found Cats</header>
        <img class="heroimage rounded ui image" src="/assets/foundcats.png">
		<div class='homepage-cat-block'>
            <img class="rounded ui image" src="/photos/1/1/cat1.png"> 
            <a href = "#">Mr Smalltoes</a>
		</div>
	</article>
	<article class="cat-article trbackground"> <!-- safe cats -->
		<header>Safe Cats</header>
        <img class="heroimage rounded ui image" src="/assets/safecats.png">
		<?php 
			foreach($safe as $incident) { ?>
			<div class='homepage-cat-block'>	
				<img class="rounded ui image" src="/photos/{{$incident->cat->user_id}}/{{$incident->cat->id}}/{{$incident->cat->photos[0]->filename}}"> 
				<a href = "{{$url}}/cats/{{$incident->cat->id}}">{{$incident->cat->name}}</a>
			</div>
		<?php } ?>		
	</div>
@stop

@section('footer')
	<br />
	<p> footer section: contains important links and credit for artwork.. </p>
@stop

@section('pagejs')
<!-- load in javascript for image sliders and paralax sections -->

{{ HTML::script('js/owl.carousel.js') }}

<script type="text/javascript">
    $(function() {
        $("#moggy-story").owlCarousel({
            autoPlay : 4000,
            stopOnHover : true,
            navigation:false,
            paginationSpeed : 4000,
            pagination : false,
            goToFirstSpeed : 0,
            singleItem : true,
            transitionStyle:"fade"
        });
    });   
</script>
@stop