<?php include "includes/init.php"; ?>
<?php include "includes/header.php"; ?>

<?php
	//include content
	if(isset($_GET['root'])){
		$root = strtolower($_GET['root']);
		//Checking if the requested file exist in pages directory
		if(file_exists("pages/" . $root . ".php")){
			include "pages/" . $root . ".php";
		} else {
			echo "<div class='container'>";
			echo "<h1>Error 404 Page not found.</h1>";
			echo "</div>";
		}
	} else {
		//If 'root' is not set include default page 
		include "pages/home.php";
	}
?>

<?php include "includes/footer.php"; ?>