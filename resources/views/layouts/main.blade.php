<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Usama Imdad | {{Supporter::getTitle(Route::currentRouteName())}}</title>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/linericon.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	@yield('styles')
</head>
<body>
	@include('inc.main.header')
	@yield('content')
	@include('inc.main.newsletter')
	@include('inc.main.footer')

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/stellar.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('js/isotope-min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	{{-- <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script> --}}
	<script src="{{asset('js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> --}}
	{{-- <script src="{{asset('js/gmaps.min.js')}}"></script> --}}
	<script src="{{asset('js/theme.js')}}"></script>
	@yield('js')
</body>
</html>