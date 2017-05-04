<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Send money to anyone, anywhere.">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	

	<!-- STYLESHEETS-->
	<link rel="stylesheet" type="text/css" href="{{asset('libraries/bootstrap/css/bootstrap.min.css')}}">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/index.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="{{asset('assets/js/emailvalidation.js')}}" ></script>
	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>

		<header class="">
			<div class="bg-black h-105">
			                <a href="{{url('/')}}"><h4 class="p-t-37 p-l-20 f-30 c-white mp-l-90">Hack Party</h4></a>
			</div>

		</header>

		@yield('content')

	<script type="text/javascript" src="{{asset('libraries/bootstrap/js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{asset('libraries/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>