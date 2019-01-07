<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title> @yield("meta-title"," | Portal ITJ Vallereal")</title>
		<meta name="description" content="Portal ITJ Vallereal, administracion de usuarios, concentrados. Administracion de recursos informaticos" />
		<meta name="keywords" content="ITJ Vallereal, Vallereal, Instituto Thomas Jefferson Campus Vallereal, Campus Vallereal, Escuelas, Instituto, Academia, Centro Escolar" />
		<meta name="author" content="jvieyra"/>

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- vector map CSS -->
		<link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

		@stack('scripts-header')
				
		<!-- Custom CSS -->
		<link href="{{ asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">

		<!-- app style -->
		<link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		@yield('content')	

		 <!-- jQuery -->
  	<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
  	<!-- Bootstrap Core JavaScript -->
		<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<!-- Slimscroll JavaScript -->
		<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>
		
		<!-- Stack --->
		@stack('scripts-footer')

		<!-- Init JavaScript -->
		<script src="{{ asset('dist/js/init.js') }}"></script>

	</body>
</html>
