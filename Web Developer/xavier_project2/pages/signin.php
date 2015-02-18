<div class="container">
	<h1>Sign In</h1>
	<?php
		if (isset($_GET['error']) && $_GET['error'] == 1) {
			echo "Wrong username or password.";
		}
	?>
	<form action="index.php?root=signinhandler" method="POST">
		<ul class="delete-bullet">
			<li>Email</li>
			<li><input type="text" name="email"></li>
			<li>Password</li>
			<li><input type="password" name="password"></li>
			<li><button class="shop-button" type="submit">Submit</button></li>
		</ul>
	</form>
</div>
	