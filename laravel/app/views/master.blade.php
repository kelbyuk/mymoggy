<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="//use.typekit.net/pad6hcy.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="MyMoggy Lost and Found cats. register and should your cat go missing, we will be here to help.">
	<meta name="keywords" content="mymoggy, UK, lost and Found, cats,lost,found,support, lost pet, lost cat, missing cat, owners, reuniting lost cats, finding lost cats, @mymoggyuk, wedoweb">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" media="all" href="/css/jquery.bxslider.css">-->
	{{ HTML::style('css/jquery.tweet.css') }}
	{{ HTML::style('css/style.css') }}
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	{{ HTML::script('js/jquery.cookie.js') }}	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
	{{ HTML::script('js/geolocation.js') }}	
	@yield('head')
</head>
<body>  <!--  onload="setTimeout('initialise()',500);" -->
	<div class="wrapper">
	<nav>
		@section('nav')
		<ul>
			<li>{{ HTML::link('', 'Homepage') }}</li>
			<li>{{ HTML::link('lists/lost/all', 'Lost Cats') }}</li>
			<li>{{ HTML::link('lists/found/all', 'Found Cats') }}</li>
			<li>{{ HTML::link('lists/safe/all', 'Safe Cats') }}</li>
			<li>{{ HTML::link('cats', 'Register') }}</li>
			<!--@if(Auth::check())
            	<li>{{ HTML::route('profile', 'Profile' ) }}</li>
                <li>{{ HTML::route('logout', 'Logout ('.Auth::user()->username.')') }}</li>
            @else
                <li>{{ HTML::route('login', 'Login') }}</li>
            @endif -->
		</ul>
		@show
	</nav>
    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif
	<div class="main">
		@yield('main')
	
	</div>
	
	<div class="secondary">
		@yield('secondary')
	</div>
	
	<footer>
		@yield('footer')
	</footer>
	</div>
	<!--js at bottom speeds up page rendering :) -->
	{{ HTML::script('js/jquery.bxslider.min.js') }}
	<script type="text/javascript">
		$(document).ready(function(){
		  $('.bxslider').bxSlider({  auto: true, speed: 1000, controls: false, pause: 6000});			    
		});
	</script>
	{{ HTML::script('js/jquery.tweet.js') }}
	<script type='text/javascript'>
    jQuery(function($){
        $(".tweet").tweet({
            username: "mymoggyuk",
            join_text: "auto",
            avatar_size: 26,
            count: 2,
            auto_join_text_default: " we said,",
            auto_join_text_ed: " we",
            auto_join_text_ing: " we were",
            auto_join_text_reply: " we replied to",
            auto_join_text_url: " we linked,",
            loading_text: "loading tweets..."
        });
    });
    </script>
</body>
</html>