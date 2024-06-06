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
	@include('resources/css/tiny-slider.blade.php')
	<!-- <link rel="stylesheet" href="/assets/css/aos.css"> -->
	@include('resources/css/aos.blade.php')
	<!-- <link rel="stylesheet" href="/assets/css/glightbox.min.css"> -->
	@include('resources/css/glightbox.min.blade.php')
	<!-- <link rel="stylesheet" href="/assets/css/style2.css"> -->
	@include('resources/css/style.blade.php')

	<!-- <link rel="stylesheet" href="/assets/css/flatpickr.min.css"> -->
	@include('resources/css/flatpickr.min.blade.php')

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
	@include('resources/js/bootstrap.bundle.min.blade.php')
    <!-- <script src="/assets/js/tiny-slider.js"></script> -->
	@include('resources/js/tiny-slider.blade.php')
    <!-- <script src="/assets/js/flatpickr.min.js"></script> -->
	@include('resources/js/flatpickr.min.blade.php')
    <!-- <script src="/assets/js/aos.js"></script> -->
	@include('resources/js/aos.blade.php')
    <!-- <script src="/assets/js/glightbox.min.js"></script> -->
	@include('resources/js/glightbox.min.blade.php')
    <!-- <script src="/assets/js/navbar.js"></script> -->
	@include('resources/js/navbar.blade.php')
    <!-- <script src="/assets/js/counter.js"></script> -->
	@include('resources/js/counter.blade.php')
    <!-- <script src="/assets/js/custom.js"></script> -->
	@include('resources/js/custom.blade.php')
	<script src="/assets/js/main.js"></script>
    @yield('script')
</body>
</html>