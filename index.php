<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="Name of your web site">
	<meta name="author" content="marketify">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Personal Page | Faykarr</title>

	<!-- STYLES -->
	<link
		href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/plugins.css" />
	<link rel="stylesheet" type="text/css" href="css/dark.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="img/logo/logo.png" type="image/x-icon">
	<!-- /STYLES -->

</head>

<body class="dark">

	<!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->

	<!-- WRAPPER ALL -->
	<div class="beker_tm_all_wrap" data-magic-cursor=""> <!-- If you want disable magic cursor add value "hide" -->

		<!-- MODALBOX SERVICE -->
		<div class="beker_tm_modalbox_service">
			<div class="box_inner">
				<div class="close">
					<a href="#">Close</a>
				</div>
				<div class="description_wrap"></div>
			</div>
		</div>
		<!-- /MODALBOX SERVICE -->

		<!-- MODALBOX NEWS -->
		<div class="beker_tm_modalbox_news">
			<div class="box_inner">
				<div class="close">
					<a href="#">Close</a>
				</div>
				<div class="description_wrap"></div>
			</div>
		</div>
		<!-- /MODALBOX NEWS -->

		<!-- Inlcude once navigation.php -->
		<?php include_once('navigation.php'); ?>
		<!-- If isset request with variable hal -->
		<?php $hal = isset($_REQUEST['hal']) ? $_REQUEST['hal'] : ''; ?>

		<!-- Main content -->
		<?php
		if (!empty($hal)) {
			include_once $hal . '.php';
		} else {
			include_once 'home.php';
		}
		?>

		<!-- COPYRIGHT -->
		<div class="beker_tm_copyright">
			<p class="wow fadeIn" data-wow-duration="1s">&copy; 2023 Crafted with ❤️ by <a
					href="https://faykarr.vercel.app">faykarr</a></p>
		</div>
		<!-- /COPYRIGHT -->

		<!-- MAGIC CURSOR -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /MAGIC CURSOR -->

	</div>
	<!-- / WRAPPER ALL -->

	<!-- SCRIPTS -->
	<script src="js/jquery.js"></script>
	<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
	<script src="js/plugins.js"></script>
	<script src="js/init.js"></script>
	<!-- /SCRIPTS -->

</body>

</html>