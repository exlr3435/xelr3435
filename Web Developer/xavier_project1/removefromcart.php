<?php
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index.php?root=home');
		die();
	}
	include 'functions/product.php';
	$id = $_GET['id'];

	remove_from_cart($id);
	header('Content-Type: application/json');
?>
{
	"message" : "success"
}