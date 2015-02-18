<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="big-title">Contact</h1>
		</div>
		<div class="col-12">
			You are here: 
			<a href="index.php?root=home">Home</a>
			&gt;
			<a href="index.php?root=contact">Contact</a>
		</div>
		<div class="col-12">
			<iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190255.8460334485!2d-87.73215545000001!3d41.83373295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C+IL!5e0!3m2!1sen!2sca!4v1399009503150" height="350"></iframe>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<h3 class="medium-title">Contact info</h3>
			<ul class="list-no-style">
				<li>Phone: 604 682 2787</li>
				<li>Email: xavier@vanarts.com</li>
				<li>Address: 570 Dunsmuir St</li>
				<li>City: Vancouver, Bc, Ca</li>
			</ul>
		</div>
		<div class="col-6">
			<h3 class="medium-title">Drop us a line</h3>
			<form action="index.php?root=contacthandler" method="post">
				<ul class="contact-inputs list-no-style">
					<li>Name: <br><input class="input" type="text" name="name"></li>
					<li>Email: <br><input class="input" type="text" name="email"></li>
					<li>Message: <br><textarea class="input" name="message"></textarea></li>
					<li><input class="submit-button button" type="submit" value="Send"></li>
				</ul>
			</form>
			<?php
				if (isset($_GET['error']) && $_GET['error'] == 1) {
					echo "Could not send the email";
				}
				if (isset($_GET['success']) && $_GET['success'] == 1) {
					echo "Your email was sent";
				}
			?>
		</div>
	</div>
</div>