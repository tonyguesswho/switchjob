<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Hire The Industry's Developers" />
		<meta name="keywords" content="software, startups, hackers, development, java, python, angular, agile, ruby, javascript, bootstrap"/>
		<meta name="author" content="Switch.ng" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Switch Dev</title>
		<!-- STYLESHEETS-->
		<link rel="stylesheet" href="/switch/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/switch/assets/css/owl.theme.css">
		<link rel="stylesheet" href="/switch/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="/switch/assets/css/jquery.vegas.min.css">
		<!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
		<link rel="stylesheet" href="/switch/assets/css/icons/icon-fonts/styles.css">
		<link rel="stylesheet" href="/switch/assets/css/icons/icon-fonts/pixeden-icons.css">
		<link rel="stylesheet" type="text/css" href="/switch/assets/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="/switch/assets/css/animate.css">

		<!-- CUSTOM STYLES -->
		<link rel="stylesheet" href="/switch/assets/css/main.css">
		<link rel="stylesheet" href="/switch/assets/css/index.css">
		<link rel="stylesheet" href="/switch/assets/css/responsive2.css">
		<style>
			.animated{
				visibility: hidden;
			}
		</style>
		<!-- WEBFONT -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

		<!-- JQUERY -->
		<script src="/switch/assets/js/jquery.min.js"></script>
	</head>
	<body class="align-center">
		@yield('content')
	<!--END WRAPPER -->

		<!-- SCRIPTS -->
		<script src="/switch/assets/js/bootstrap.min.js"></script>
		<script src="/switch/assets/js/jquery.scrollTo.min.js"></script>
		<script src="/switch/assets/js/jquery.nav.js"></script>
		<script src="/switch/assets/js/jquery.knob.js"></script>
		<script src="/switch/assets/js/owl.carousel.min.js"></script>
		<script src="/switch/assets/js/jquery.vegas.min.js"></script>
		<script src="/switch/assets/js/parsley.min.js"></script>
		<script src="/switch/assets/js/ouibounce.min.js"></script>
		<script src="/switch/assets/js/animisition.min.js"></script>
		<script src="/switch/assets/js/jscrollability.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="/switch/assets/js/main2.js"></script>
		<script>
			$(document).ready(function(){
				app.pageTransition();
				app.navbarController();
				app.sticker();
				app.vegasController();
				app.parallax();
				app.knobs();
				app.maps();
				app.scrollable();
				//app.ouibounce();
			});



		</script>
	</body>
</html>