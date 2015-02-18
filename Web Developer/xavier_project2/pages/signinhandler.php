<?php
	if (isset($_POST["email"], $_POST["password"])) {
		$email = $_POST["email"];
		$password = $_POST["password"];

		if ($user_id = login_check($email, $password)) {

			$_SESSION['auth_id'] = $user_id;

			header("location: index.php");
			die();
		} 
	}

	header("location: index.php?root=signin&error=1");
	die();