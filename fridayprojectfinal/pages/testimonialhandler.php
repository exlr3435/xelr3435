<?php
	if (isset($_POST["name"], $_POST["title"], $_POST["content"])) {
		$name = $_POST["name"];
		$title = $_POST["title"];
		$content = $_POST["content"];

		if (!empty($name) && !empty($title) && !empty($content)){
			$query = "INSERT INTO testimonials 
				(name, title, content) 
				VALUES 
				('" . $name . "', '" . $title . "', '" . $content . "')";

			if (mysql_query($query)) {
				header("Location: index.php?root=testimonials");
				die();
			} else {
				header("Location: index.php?root=submittestimonials&error=query");
				die();
			} 
		} else {
			header("Location: index.php?root=submittestimonials&error=empty");
			die();
		}
	} else {
		header("Location: index.php?root=submittestimonials&error=set");
		die();
	}
?>