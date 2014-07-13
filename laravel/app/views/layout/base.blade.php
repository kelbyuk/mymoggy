<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="MyMoggy Lost and Found cats. register and should your cat go missing, we will be here to help.">
	<meta name="keywords" content="mymoggy, UK, lost and Found, cats,lost,found,support, lost pet, lost cat, missing cat, owners, reuniting lost cats, finding lost cats, @mymoggyuk, @wedoweb, wedoweb.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>  
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/semantic.css') }}
	{{ HTML::style('css/style.css') }}

	@yield('head')
</head>
<body>  






	<!-- old stuff -->
	<div class="page-wrap">
	<header class="page-header">
		@yield('top')
	</header>
    <!-- <div id="background_wrap"></div> -->
	<div class="block-wrap">
		<nav role="navigation" id="stickyheader">
			<div class="textlogo"><img src="assets/mymoggy.png"></div>
			@section('nav')
			<ul class="navigation">
				<li>{{ HTML::link('', 'Homepage') }}</li>
				<li>{{ HTML::link('lists/lost/all', 'Lost Cats') }}</li>
				<li>{{ HTML::link('lists/found/all', 'Found Cats') }}</li>
				<li>{{ HTML::link('lists/safe/all', 'Safe Cats') }}</li>

				 @if ( Auth::guest() )
				 	<li>{{ HTML::link('register', 'Register') }}</li>
	             	<li>{{ HTML::link('login', 'Login') }}</li>
	             @else
	             	<li>{{ HTML::link('dashboard', 'My Cats') }}</li>
	                <li>{{ HTML::link('logout', 'Logout') }}</li>
	             @endif
			</ul>
			@show
		</nav>

       <!-- Success-Messages -->
        @if ($message = Session::get('success'))

			<div class="ui green message block-wrap">
			  <div class="header">
			    {{{ $message }}}
			  </div>
			</div>
        @endif
	</header>
  	<section class="block-wrap">
  		@yield('information')
  	</section>
  	<section class="block-wrap">
		@yield('main')
	</section>
	
	
	<footer class='block-wrap'>
		@yield('footer')
	</footer>
	</div> <!-- end page-wrap -->

	<!--js at bottom speeds up page rendering :) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	{{ HTML::script('js/jquery.cookie.js') }}	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
	{{ HTML::script('js/geolocation.js') }}	
	{{ HTML::script('js/semantic.js') }}
	<script type="text/javascript">
	$(function() {
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('#stickyheader').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('#stickyheader').css({position: 'fixed', top: '0px'});
                        $('#stickyalias').css('display', 'block');
                } else {
                        $('#stickyheader').css({position: 'static', top: '0px'});
                        $('#stickyalias').css('display', 'none');
                }
        });
    });
      </script>
	@yield('pagejs')
	
</body>
</html>