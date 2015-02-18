<?php
	if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$Name = $name; //senders name
		$from = $email; //senders e-mail adress
		$recipient = "xelr3435@gmail.com"; //recipient
		$mail_body = $message; //mail body
		$subject = "Email From Biz Coach Plus"; //subject
		$header = "From: ". $Name . " <" . $from . ">\r\n"; //optional headerfields

		if (mail($recipient, $subject, $mail_body, $header)) {
			header("Location: index.php?root=contact&success=1");
			die();
		} else {
			header("Location: index.php?root=contact&error=1");
			die();
		}
	}

	header("Location: index.php?root=contact");
	die();
?>