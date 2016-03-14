<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Dashboard | Melon - Flat &amp; Responsive Admin Template</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/fontawesome/font-awesome.min.css') }}" rel="stylesheet">
	<!--[if IE 7]>
		<link href="{{ asset('assets/css/fontawesome/font-awesome-ie7.min.css') }}" rel="stylesheet">
	<![endif]-->

	<!--[if IE 8]>
		<link href="{{ asset('assets/css/ie8.css') }}" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="{{ asset('assets/js/libs/jquery-1.10.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/libs/lodash.compat.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/libs/breakpoints.js') }}"></script>
	<!-- App -->
	<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins.form-components.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->
	<script>
	$(document).ready(function(){
		"use strict";
		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

</head>

<!-- Header -->
<header class="header navbar navbar-fixed-top" role="banner">
	<!-- Top Navigation Bar -->
	<div class="container">
		@include('admin/common/header')
	</div> <!-- /#project-switcher -->
</header> <!-- /.header -->
<div id="container">
	<div id="sidebar" class="sidebar-fixed">
		@include('admin/common/sidebar')
	</div>

	<div id="content">
		<div class="container">
			@yield('content')
		</div>
	</div>
</div>