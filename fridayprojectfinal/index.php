<?php
	//connect
	$host = "127.0.0.1";
	$user = "root";
	$pass = "";
	$dbname = "ediphotos";
	mysql_connect($host, $user, $pass) or die ("Error connecting to database");
	mysql_select_db($dbname) or die ("Error Selecting database");

	//include header
	include("includes/header.php");

	//include content
	if(isset($_GET['root'])){
		$root = strtolower($_GET['root']);
		//Checking if the requested file exist in pages directory
		if(file_exists("pages/" . $root . ".php")){
			include "pages/" . $root . ".php";
		} else {
			echo "<h1>Page not found.</h1>";
		}
	} else {
		//If 'root' is not set include default page 
		include "pages/home.php";
	}

	//include footer
	include("includes/footer.php");
?>