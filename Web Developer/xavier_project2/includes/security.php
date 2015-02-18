<?php
	if (!isset($_SESSION['auth_id']) || is_null($_SESSION['auth_id'])) {
		header("Location: http://localhost/tutoring/dummy_website2/cms/login.php");
		die();
	}
?>