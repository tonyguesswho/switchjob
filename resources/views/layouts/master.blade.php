<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Send money to anyone, anywhere.">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hack Party</title>
	

	<!-- STYLESHEETS-->
	<link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">


	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
	<div class="header-bg"></div>
	<div class="black-overlay"></div>
	<div class="h-100vh">
		<header id="main-header" class="">
			<nav class="navbar h-80 m-t-19 m-b-19" role="navigation" id="main-nav">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand h-auto z-1000" href="index.html">
							<!-- <img src="#" alt="wazobiaFX" height="30px" width="170px"/> -->
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse m-t-0 m-b-15">
						<ul class="nav navbar-nav navbar-right main-nav-list">
							<!-- <li class="#"><a href="#" class="f-14 w-700 c-white	p-l-24 p-r-24">HOME</a></li>
							<li class="#"><a href="#" class="f-14 w-700 c-white	p-l-24 p-r-24">ABOUT</a></li> -->
							<!-- <li class="#"><a href="sponsor.html" class="f-14 w-700 c-white	p-l-24 p-r-24">SPONSOR</a></li> -->
							<!-- <li class="#"><a href="#" class="f-14 w-700 c-white bd-50 bg-red p-t-8 p-b-8 p-l-24 p-r-24 m-t-7 m-b-7">ATTEND</a></li> -->
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
		@yield('content')
	<script type="text/javascript" src="libraries/bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>