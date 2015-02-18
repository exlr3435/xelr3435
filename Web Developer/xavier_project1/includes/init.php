<?php 
	session_start();

	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}

	$page_title = "VANARTS STUDENT MOCK PROJECT SITE";

	include ("config/config.php");

	include ("functions/database.php");
	include ("functions/product.php");
?>