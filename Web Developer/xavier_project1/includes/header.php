<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title; ?></title>
		
		<link href='http://fonts.googleapis.com/css?family=Roboto:400italic,700,400,300,300italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>
	<body>
	<header class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<img class="img-full-width logo" src="img/logo.png">
				</div>
				<div class="col-9">
					<ul>
						<li><a href="index.php?root=cart"><img src="img/img10.png" alt="cart image">Cart(<?php echo count_cart(); ?>)</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<nav class="main-nav">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul>
						<li><a href="index.php?root=home">Home</a></li>
						<li><a href="index.php?root=products">Products</a></li>
						<li><a href="index.php?root=prices">Prices</a></li>
						<li><a href="index.php?root=contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>