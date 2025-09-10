<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>@yield('title', 'ShopTec')</title>
<!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="{{ asset('template/css/style.css') }}"/>

	@yield('styles')
</head>

<body>

	@include('partials.header')

	<main>
		@yield('content')
	</main>


	@include('partials.footer')

	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="{{ asset('template/js/script.js') }}"></script>

	@yield('scripts')
</body>
</html>
