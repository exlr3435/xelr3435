<?php
	function login_check ($email, $password) {
		$password = md5($password);
		$sql = "SELECT COUNT(*) as `count`, `user_id` FROM `users` WHERE `email`='". $email ."' AND `password`='".$password."' LIMIT 1";
		if ($result = query($sql)) {
			$row = mysqli_fetch_all($result);
			if ($row[0][0] > 0) {
				//on success return user_id
				return $row[0][1];
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	function fetch_user_data ($user_id) {
		$sql = "SELECT `user_id`, `name`, `username` FROM `users` WHERE `user_id`=" . $user_id . " LIMIT 1";

		if ($result = query($sql)) {
			return mysqli_fetch_assoc($result);
		} else {
			return false;
		}
	}

	function create_user($name, $email, $password, $country, $age){
		if(!is_numeric($age)){
			return false;
		}

		$password = md5($password);

		$sql = "INSERT INTO `users` (`name`, `email`, `password`, `country`, `age`) VALUES ('".$name."', '".$email."', '".$password."', '".$country."', '".$age."')";

		if (query($sql)) {
			return true;
		} else {
			return false;
		}
	}
	
	function email_check ($email) {
		$sql = "SELECT * FROM `users` WHERE `email`='".$email."'";

		if ($result = query($sql)) {
			if (mysqli_num_rows($result) >= 1){
				return false;
			} else {
				return true;
			}
		} else {
			return false;
		}
	}