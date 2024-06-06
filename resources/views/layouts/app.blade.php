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


	<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
	<link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="assets/css/tiny-slider.css">
	<link rel="stylesheet" href="assets/css/aos.css">
	<link rel="stylesheet" href="assets/css/glightbox.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="assets/css/flatpickr.min.css">

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


    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ url('assets/js/flatpickr.min.js') }}"></script>
    <script src="{{ url('assets/js/aos.js') }}"></script>
    <script src="{{ url('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/js/navbar.js') }}"></script>
    <script src="{{ url('assets/js/counter.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
	<script src="{{ url('assets/js/main.js') }}"></script>
    @yield('script')
</body>
</html>