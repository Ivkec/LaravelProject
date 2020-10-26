<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
       @yield('title')
    </title>
	<meta charset="UTF-8">
	<meta name="description" content="GamingSrbija Gaming Magazine Srbija">
	<meta name="keywords" content="gaming, srbija, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSRF token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->
	<link href="../img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- Stylesheets/CSS -->
	@include('inc.css_app')
</head>
<body>
    <div id="app">
        <!-- Page Preloder -->
	    <div id="preloder">
	    	<div class="loader"></div>
	    </div>

	    <!-- Header section -->
	        <header class="header-section">
	        	<div class="header-warp">
	        		<div class="header-social d-flex justify-content-end">
	        			<p>Follow us:</p>
	        			<a href="#"><i class="fa fa-pinterest"></i></a>
	        			<a href="#"><i class="fa fa-facebook"></i></a>
	        			<a href="#"><i class="fa fa-twitter"></i></a>
	        			<a href="#"><i class="fa fa-dribbble"></i></a>
	        			<a href="#"><i class="fa fa-behance"></i></a>
	        		</div>
          
                    @include('inc.navbar')
	        			
	        		</div>
	        	</div>
	        </header>

            @include('inc.heroSection')
           
            <main class="blog-section spad py-4">
                @yield('content')
            </main> 
    </div>

    @include('inc.footer')
	@include('inc.scripts_app')
</body>
</html>
