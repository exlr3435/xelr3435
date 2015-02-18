<?php
	if(isset($_POST['name'],$_POST['email'],$_POST['password'],$_POST['country'],$_POST['age'] )){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$country = $_POST['country'];
		$age = $_POST['age'];

		if(empty($name) || empty($email) || empty($password) || empty($country) || empty($age)) {
			header("location: index.php?root=signup&error=1");
			die();
		} else {
			if (email_check($email)) {
				if (create_user($name, $email, $password, $country, $age)){
					header("location: index.php?root=home");
					die();
				}else{
					header("location: index.php?root=signup&error=2");
					die();
				}
			} else {
				header("location: index.php?root=signup&error=3");
				die();
			}	
		}

	}

	header("location: index.php?root=signup");
	die();
?>