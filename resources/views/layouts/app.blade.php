<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{{ !empty($meta_title) ? $meta_title : '' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png">
	@if(!empty($meta_keyword))
	<meta name="keyword" content="{{ $meta_keyword }}" />
	@endif
	@if(!empty($meta_description))
	<meta name="description" content="{{ $meta_description }}" />
	@endif

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="front/fonts/icomoon/style.css">
	<link rel="stylesheet" href="front/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="front/css/tiny-slider.css">
	<link rel="stylesheet" href="front/css/aos.css">
	<link rel="stylesheet" href="front/css/glightbox.min.css">
	<link rel="stylesheet" href="front/css/style.css">

	<link rel="stylesheet" href="front/css/flatpickr.min.css">

    @yield('style')
</head>
<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')


<!-- Preloader -->
<div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('front/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('front/js/aos.js') }}"></script>
    <script src="{{ asset('front/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/js/navbar.js') }}"></script>
    <script src="{{ asset('front/js/counter.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('script')
</body>
</html>