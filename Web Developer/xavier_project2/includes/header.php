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
					<ul class="delete-bullet inline-list float-right">
						<li><a href="index.php?root=home">Home</a></li>
						<li><a href="index.php?root=products">Products</a></li>
						<li><a href="index.php?root=testimonials">Testimonials</a></li>
						<li><a href="index.php?root=contact">Contact</a></li>
						<?php if (isset($_SESSION['auth_id']) && !is_null($_SESSION['auth_id'])) { ?>
							<li><a href="index.php?root=resources">Resources</a></li> 
						<?php } ?>
						<?php if (!isset($_SESSION['auth_id']) || is_null($_SESSION['auth_id'])) { ?>
							<li><a href="index.php?root=signin">Sign In</a></li>
							<li><a href="index.php?root=signup">Sign Up</a></li>
						<?php } ?>
						<?php if (isset($_SESSION['auth_id']) && !is_null($_SESSION['auth_id'])) { ?>
							<li><a href="index.php?root=logout">Logout</a></li> 
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>

	</header>