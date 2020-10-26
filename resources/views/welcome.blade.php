
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>GamerSrbija</title>
	<meta charset="UTF-8">
	<meta name="description" content="GamingSrbija Gaming Magazine Srbija">
	<meta name="keywords" content="gaming, srbija, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>
    
        <!-- added: CSS  Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    
  <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    


</head>
<body>
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
					@include('inc.navbarW')
			</div>
		</div>
	</header>

	@include('inc.heroSection')

	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Playstation</a></div>
						<h3>Top 5 best games in november</h3>
						<p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  labore suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
						<h3>Get this game at a promo price</h3>
						<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida ncididunt ut labore ....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>
					
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/1.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="img/blog/2.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="img/blog/3.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/promo-bg.jpg">
		<a href="https://www.youtube.com/watch?v=uFsGy5x_fyQ" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>Promo video</h2>
				<p>pogledajte najnovije video trilere za 2020 god.</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">
				<h3>Igra godine - GTA5</h3>
				<p>Grand Theft Auto V, skraćeno GTA V je akciono-avanturistička video-igra smeštena u otvoreni svet,
				 koju je razvio razvojni tim Rokstar norta, u Velikoj Britaniji, a izdavač je Rokstar gejms. Igra će,
				  po prvi put od Grand Theft Auto IV (2008), imati „veliki“ naslov, kojim će započeti peta „era“ video-igre, 
				  takođe će biti i nastavak fikcionog univerzuma koji je bio predstavljen kroz tu igru. 15. igra ukupno u franšizi,
				   biće smeštena u izmišljeni grad Los Santos, u državi San Andreas, i njegovom okruženju, baziranim na savremenom Los
				    Anđelesu i Južnoj Kaliforniji. Los Santos je bio jedan od tri grada u igri Grand Theft Auto: San Andreas, iz treće 
					ere serijala, objavljen 2004...</p>
				<a href="/blog" class="read-more">Pročitaj više  <img src="img/icons/double-arrow.png" alt="#"/></a>
			</div>
		</div>
	</section>

@include('inc.footer')
@include('inc.scripts_app')

	</body>
</html>

