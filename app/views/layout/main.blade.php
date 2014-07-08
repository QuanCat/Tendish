<!DOCTYPE html>
<html>
	<head>
		@yield('head')
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Open Sans -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
		<!-- Open Sans Condensed -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{URL::route('home')}}/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="{{URL::route('home')}}/css/font-awesome.min.css" rel="stylesheet">
		<!-- Dropdown Levels Menu Base CSS -->
		<link href="{{URL::route('home')}}/css/ddlevelsmenu-base.css" rel="stylesheet">
		<!-- Dropdown Levels Menu Topbar CSS -->
		<link href="{{URL::route('home')}}/css/ddlevelsmenu-topbar.css" rel="stylesheet">
		<!-- Slider Revolution CSS -->
		<link href="{{URL::route('home')}}/css/rs-settings.css" rel="stylesheet">		
		<!-- Animate CSS -->
		<link href="{{URL::route('home')}}/css/animate.min.css" rel="stylesheet">
		<!-- Pretty Photo CSS-->
		<link href="{{URL::route('home')}}/css/prettyPhoto.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{URL::route('home')}}/css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>

	<body>
		@if(Session::has('global'))
			<!-- View Notification -->
		@endif

		@include('layout.navigation')
		
		@yield('content')
		
		<footer class="text-center">
			<!-- Container -->
			<div class="container">
				<!-- Footer Content -->
				<div class="footer-content">
					<p>Copyright &copy; 2013 - <a href="{{ URL::route('home') }}">Tendish</a>
				</div>
			</div>
		</footer>
		
		<!-- Scroll To Top -->
		<span class="top"><a href="#"> <i class="fa fa-chevron-up"></i> </a></span>
		<!-- Jquery Js -->
		<script src="{{URL::route('home')}}/js/jquery.js"></script> 
		<!-- Bootstrap JS -->
		<script src="{{URL::route('home')}}/js/bootstrap.min.js"></script>
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="{{URL::route('home')}}/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="{{URL::route('home')}}/js/jquery.themepunch.revolution.min.js"></script>
		<!-- Arbitrary Anchor JS -->
		<script type="text/javascript" src="{{URL::route('home')}}/js/jquery.arbitrary-anchor.js"></script>
		<!-- Pretty Photo JS -->
		<script type="text/javascript" src="{{URL::route('home')}}/js/jquery.prettyPhoto.js"></script>
		<!-- jQuery way points -->
		<script src="{{URL::route('home')}}/js/waypoints.min.js"></script>
		<!-- jQuery Sticky JS -->
		<script src="{{URL::route('home')}}/js/jquery.sticky.js"></script>
		<!-- Dropdown Levels Menu JS -->
		<script src="{{URL::route('home')}}/js/ddlevelsmenu.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="{{URL::route('home')}}/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{URL::route('home')}}/js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="{{URL::route('home')}}/js/custom.js"></script>
	</body>
</html>