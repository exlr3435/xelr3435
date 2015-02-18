		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-4">
						<ul class="delete-bullet align-center">
							<li><a href="index.php?root=home">Home</a></li>
							<li><a href="index.php?root=testimonials">Testimonials</a></li>

						</ul>
					</div>
					<div class="col-4">
						<ul class="delete-bullet align-center">
							<li><a href="index.php?root=products">Products</a></li>
							<li><a href="index.php?root=contact">Contact</a></li>
						</ul>
					</div>
					<div class="col-4">
						<ul class="delete-bullet align-center">
							<?php if (!isset($_SESSION['auth_id']) || is_null($_SESSION['auth_id'])) { ?>
								<li><a href="index.php?root=signin">Sign In</a></li>
								<li><a href="index.php?root=signup">Sign Up</a></li>
							<?php } ?>
							<?php if (isset($_SESSION['auth_id']) && !is_null($_SESSION['auth_id'])) { ?>
								<li><a href="index.php?root=resources">Resources</a></li> 
								<li><a href="index.php?root=logout">Logout</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>