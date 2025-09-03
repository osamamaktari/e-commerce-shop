<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>@yield('title', 'ShopTec')</title>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="{{ asset('template/css/style.css') }}"/>

	@yield('styles')
</head>

<body>
    <header class="header">
		<div class="logo">
			<img src="{template/images/onlineshopping_118072.png') }}" alt="" />
			<a href="{{ url('/') }}" class="logo"> shopTec </a>
		</div>

		<form action="" class="search-form">
			<input type="search" id="search-box" placeholder="Search product..." />
			<label for="search-box" class="fas fa-search"></label>
		</form>

		<div class="icons">
			<div id="menu-btn" class="fas fa-bars"></div>
			<div id="search-btn" class="fas fa-search"></div>
			<div id="acceso-btn" class="fas fa-user"></div>
			<a href="#" class="fas fa-heart"></a>
			<a href="{{ url('/cart') }}" class="fas fa-shopping-carrito"></a>
		</div>

		<div class="acceso-form-container">
			<div id="close-acceso-btn" class="fas fa-times"></div>
			<form action="">
				<h3>Sign In</h3>
				<span>Username</span>
				<input type="email" class="box" placeholder="Enter your email" />
				<span>Password</span>
				<input type="password" class="box" placeholder="Enter your password" />
				<div class="checkbox">
					<input type="checkbox" id="recordar" />
					<label for="recordar"> Remember me</label>
				</div>
				<input type="submit" value="Login" class="btn" />
				<p>Forgot your password? <a href="#">Click here</a></p>
				<p>Don't have an account?</p>
				<a href="{{ url('/register') }}" class="btn link">Register now</a>
			</form>
		</div>
	</header>

	<div class="side-bar">
		<div id="close-side-bar" class="fas fa-times"></div>
		<div class="user">
			<img src="{template/images/user-img.png') }}" alt="" />
			<h3>Guest</h3>
			<a href="#">Log out</a>
		</div>

		<nav class="navbar">
			<a href="{{ url('/') }}"> <i class="fas fa-angle-right"></i> Home </a>
			<a href="{{ url('/about') }}"> <i class="fas fa-angle-right"></i> About Us </a>
			<a href="{{ url('/products') }}"> <i class="fas fa-angle-right"></i> Products </a>
			<a href="{{ url('/contact') }}"> <i class="fas fa-angle-right"></i> Contact </a>
			<a href="{{ url('/register') }}"> <i class="fas fa-angle-right"></i> Register </a>
			<a href="{{ url('/cart') }}"> <i class="fas fa-angle-right"></i> Cart </a>
		</nav>
	</div>


	<main>
		@yield('content')
	</main>

	<section class="quick-links">
		<div class="logo">
			<img src="{template/images/onlineshopping_118072.png') }}" alt="" />
			<a href="{{ url('/') }}" class="logo"> shopTec </a>
		</div>

		<div class="links">
			<a href="{{ url('/') }}"> Home </a>
			<a href="{{ url('/about') }}"> About Us </a>
			<a href="{{ url('/products') }}"> Products </a>
			<a href="{{ url('/contact') }}"> Contact </a>
			<a href="{{ url('/register') }}"> Register </a>
			<a href="{{ url('/cart') }}"> Cart </a>
		</div>

		<div class="share">
			<a href="#" class="fab fa-facebook-f"></a>
			<a href="#" class="fab fa-twitter"></a>
			<a href="#" class="fab fa-instagram"></a>
			<a href="#" class="fab fa-linkedin"></a>
		</div>
	</section>

	<section class="credit">
		<p>Page created by <span>Nahuel61920</span></p>
		<img src="{{ asset('template/images/card_img.png') }}" alt="" />
	</section>

	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="{{ asset('template/js/script.js') }}"></script>

	@yield('scripts')
</body>
</html>
