<div class="container">
	<h1 class="big-title">Contact</h1>
	<div class="row">
		
		<iframe class="map full-width" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d172133.14576322166!2d-122.33584225000001!3d47.61484805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1396586145554"></iframe>
	</div>
	<div class="row">
		<div class="col-6">
			<h3 class="medium-title">Contact info</h3>
			<ul class="delete-bullet remove-padding">
				<li>Phone: 604 682 2787</li>
				<li>Email: xavier@vanarts.com</li>
				<li>Address: 570 Dunsmuir St</li>
				<li>City: Vancouver, Bc, Ca</li>
			</ul>
		</div>
		<div class="col-6">
			<h3 class="medium-title">Drop us a line</h3>
			<form action="index.php?root=contacthandler" method="post">
				<ul class="contact-inputs delete-bullet remove-padding">
					<li>Name: <br><input class="input" type="text" name="name"></li>
					<li>Email: <br><input class="input" type="text" name="email"></li>
					<li>Message: <br><textarea class="input" name="message"></textarea></li>
					<li><input class="submit-button shop-button" type="submit" value="Send"></li>
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