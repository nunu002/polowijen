<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kampung Budaya Polowijen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Authentic Polowijen<span></span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item scrollto @if (Request::is('/')) active @endif"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item scrollto @if (Request::is('/about')) active @endif"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item scrollto @if (Request::is('/sentra')) active @endif"><a href="/sentra" class="nav-link">Sentra</a></li>
					<li class="nav-item scrollto @if (Request::is('/galeri')) active @endif"><a href="/galeri" class="nav-link">Galeri</a></li>
					<li class="nav-item scrollto @if (Request::is('/blog')) active @endif"><a href="/blog" class="nav-link">Blog</a></li>
					<li class="nav-item scrollto @if (Request::is('/contact')) active @endif"><a href="/contact" class="nav-link">Contact</a></li>
                    @if (Auth::check() && Auth::user()->role == 'admin')
                    <li class="nav-item scrollto"><a href="{{ route('admin') }}" class="nav-link">Admin</a></li>
                    @endif
                    @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    @endguest

                    @if (Auth::check() && Auth::user()->role == 'user')
                    {{-- <li class="nav-item scrollto"><a href="{{ route('profile.show') }}" class="nav-link">Account</a> --}}
                        <li class="nav-item scrollto @if (Request::is('profiluser')) active @endif"><a href="{{ route('profile.show') }}" class="nav-link">Account </a></li>
                        <li class="nav-item scrollto">
                            <a href="#" class="nav link">
                            <img src="" alt="">    
                            Keranjang</a>
                        </li>
                        <li class="nav-item scrollto"><a href="/logout" class="nav-link">Logout</a></li>



                    @endif
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

    @section('content')
    @show

    <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2"> Kampung Budaya Polowijen </h2>
                        <p>Kampung Edukasi sebagai Sarana Pelestarian Budaya di Kota Malang</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="https://twitter.com/PemkotMalang"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://m.facebook.com/people/Kampung-Budaya-Polowijen/100023993563201/?locale=ms_MY"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/kampungbudayapolowijen?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="/" class="py-2 d-block">Homepage</a></li>
                            <li><a href="/about" class="py-2 d-block">About KBP</a></li>
                            <li><a href="/sentra" class="py-2 d-block">Sentra</a></li>
                            <li><a href="/galeri" class="py-2 d-block">Galeri</a></li>
                            <li><a href="/blog" class="py-2 d-block">Blog</a></li>
                            <li><a href="/contact" class="py-2 d-block">Contact</a></li>
                            <li><a href="/login" class="py-2 d-block">Log In</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Informasi</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Sejarah</a></li>
                            <li><a href="#" class="py-2 d-block">Paket Kegiatan</a></li>
                            <li><a href="#" class="py-2 d-block">Galeri dan Video</a></li>
                            <li><a href="#" class="py-2 d-block">Berita</a></li>
                            <li><a href="#" class="py-2 d-block">Produk</a></li>                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Kontak</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Jl. Cakalang, RT.3/RW.2, Polowijen, Kec. Blimbing, Kota Malang, Jawa Timur</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62 815-5181-303</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">kampungbudayapolowijen@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> | KELOMPOK 7 
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/scrollax.min.js') }}"></script>
        <script src="{{ asset('js/google-map.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    </body>
    </html>
