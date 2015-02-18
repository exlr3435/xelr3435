<div class="container">
	<h1>Sign Up</h1>
	<?php
		if (isset($_GET['error']) && $_GET['error'] == 1) {
			echo "Please fill all the fields.";
		}
		if (isset($_GET['error']) && $_GET['error'] == 2) {
			echo "There was an error, please check what you entered.";
		}
		if (isset($_GET['error']) && $_GET['error'] == 3) {
			echo "Email already exists.";
		}
	?>
	<form action="index.php?root=signuphandler" method="post">
		<ul class="delete-bullet">
			<li>Name</li>
			<li><input type="text" name="name"></li>
			<li>Email</li>
			<li><input type="text" name="email"></li>
			<li>Password</li>
			<li><input type="password" name="password"></li>
			<li>Country</li>
			<li><input type="text" name="country"></li>
			<li>Age</li>
			<li><input type="text" name="age"></li>
			<li><input class="shop-button" type="submit" value="Submit"></li>
		</ul>
	</form>
</div>

