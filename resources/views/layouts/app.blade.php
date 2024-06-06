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


	<link rel="stylesheet" href="url('front/fonts/icomoon/style.css') ">
	<link rel="stylesheet" href="{{ url('front/fonts/flaticon/font/flaticon.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<!-- <link rel="stylesheet" href="/assets/css/tiny-slider.css"> -->
	@include('tiny-slider')
	<!-- <link rel="stylesheet" href="/assets/css/aos.css"> -->
	@include('aos')
	<!-- <link rel="stylesheet" href="/assets/css/glightbox.min.css"> -->
	@include('min')
	<!-- <link rel="stylesheet" href="/assets/css/style2.css"> -->
	@include('style')

	<!-- <link rel="stylesheet" href="/assets/css/flatpickr.min.css"> -->
	@include('flatpickr.min')

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


    <!-- <script src="/assets/js/bootstrap.bundle.min.js"></script> -->
	@include('bootstrap.bundle.min')
    <!-- <script src="/assets/js/tiny-slider.js"></script> -->
	@include('tiny-slider')
    <!-- <script src="/assets/js/flatpickr.min.js"></script> -->
	@include('flatpickr.min')
    <!-- <script src="/assets/js/aos.js"></script> -->
	@include('aos')
    <!-- <script src="/assets/js/glightbox.min.js"></script> -->
	@include('glightbox.min')
    <!-- <script src="/assets/js/navbar.js"></script> -->
	@include('navbar')
    <!-- <script src="/assets/js/counter.js"></script> -->
	@include('counter')
    <!-- <script src="/assets/js/custom.js"></script> -->
	@include('custom')
	<script src="/assets/js/main.js"></script>
    @yield('script')
</body>
</html>