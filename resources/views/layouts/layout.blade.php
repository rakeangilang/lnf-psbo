<!DOCTYPE html>
<html lang="en">
<head>
<title>Lost & Found IPB</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ url("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
<link href="{{ url("https://use.fontawesome.com/releases/v5.1.0/css/all.css") }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url("bootstrap/css/owl.carousel.css") }}">
<link rel="stylesheet" type="text/css" href="{{ url("bootstrap/css/owl.theme.default.css") }}">
<link rel="stylesheet" type="text/css" href="{{ url("bootstrap/css/animate.css") }}">
<link rel="stylesheet" type="text/css" href="{{ url("bootstrap/css/slick.css") }}">
<link rel="stylesheet" type="text/css" href="{{ url("bootstrap/css/main_styles.css") }}">
<link rel="stylesheet" type="text/css" href="{{ url("bootstrap/css/responsive.css") }}">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="logo"><a href="#">Lost & Found IPB</a></div></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_user">
								<div class="user_icon"></div>
								<div><a href="{{ url("register") }}">Register</a></div>
								<div><a href="{{ url("login") }}">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->

					<!-- Wishlist -->
					
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->
		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Kategori</div>
								</div>

								<ul class="cat_menu">
									<li class="hassubs">
										<a href="#">Tempat<i class="fas fa-chevron-right"></i></a>
										<ul>											
											<li><a href="{{ url("pomi") }}">Pojok MIPA<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="{{ url("gww") }}">Graha Widya Wisuda<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="{{ url("alhur") }}">Masjid Al-Hurriyyah<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="{{ url("lsi") }}">Perpustakaan LSI<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>

									<li class="hassubs">
										<a href="#">Jenis Barang<i class="fas fa-chevron-right"></i></a>
										<ul>											
											<li><a href="{{ url("gadget") }}">Gadget<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="{{ url("dompet") }}">Dompet<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="{{ url("alat tulis") }}">Alat Tulis<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="{{ url("jam tangan") }}">Jam Tangan<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>

									<li><a href="#">Waktu</a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

						</div>
					</div>
				</div>
			</div>
		</nav>
				
		<!-- Menu -->

	</header>
	
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<!--<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div> -->
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">Lost & Found IPB</h1>
						<div class="button banner_button"><a href="{{ url("/lapor_kehilangan") }}">Laporkan Kehilangan</a></div>
						<div class="button banner_button"><a href="{{ url("/lapor_temuan") }}">Laporkan Penemuan</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- Characteristics -->
	
	@yield('content')


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">Lost & Found IPB</a></div>
						</div>
						<div class="footer_title">Developed by IPB Computer Science undergraduate students</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Jenis Barang</div>
						<ul class="footer_list">
							<li><a href="{{ url("gadget") }}">Gadget</a></li>
							<li><a href="{{ url("dompet") }}">Dompet</a></li>
							<li><a href="{{ url("alat tulis") }}">Alat Tulis</a></li>
							<li><a href="{{ url("jam tangan") }}">Jam Tangan</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Jenis Tempat</div>
						<ul class="footer_list">
							<li><a href="{{ url("pomi") }}">Pojok MIPA</a></li>
							<li><a href="{{ url("gww") }}">Graha Widya Wisuda</a></li>
							<li><a href="{{ url("alhur") }}">Masjid Al-Hurriyyah</a></li>
							<li><a href="{{ url("lsi") }}">Perpustakaan LSI</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Layanan Pengguna</div>
						<ul class="footer_list">
							<li><a href="akun.php">Akun Saya</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="dukungan.php">Dukungan Barang</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="{{ url("bootstrap/js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ url("bootstrap/js/popper.js") }}"></script>
<script src="{{ url("bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ url("bootstrap/js/TweenMax.min.js") }}"></script>
<script src="{{ url("bootstrap/js/TimelineMax.min.js") }}"></script>
<script src="{{ url("bootstrap/js/ScrollMagic.min.js") }}"></script>
<script src="{{ url("bootstrap/js/animation.gsap.min.js") }}"></script>
<script src="{{ url("bootstrap/js/ScrollToPlugin.min.js") }}"></script>
<script src="{{ url("bootstrap/js/owl.carousel.js") }}"></script>
<script src="{{ url("bootstrap/js/slick.js") }}"></script>
<script src="{{ url("bootstrap/js/easing.js") }}"></script>
<script src="{{ url("bootstrap/js/custom.js") }}"></script>
</body>

</html>