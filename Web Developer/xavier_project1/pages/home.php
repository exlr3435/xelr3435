<div class="container">
	<div class="row">
		<div class="col-12">
			<img class="img-full-width" src="http://fakeimg.pl/960x400/?text=Hello">
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<h2>Our Business Coaches</h2>
			<div class="row">
				<?php $products = fetch_all_products (); ?>
				<div class="col-4">
					<a class="product-title" href="index.php?root=productdetail&id=<?php echo $products[0]['product_id']; ?>">
						<img class="img-full-width" src="<?php echo $products[0]['product_image']; ?>">
						<h4><?php echo $products[0]['product_name']; ?></h4>
					</a>
					<button class="button" type="button" onclick="add_to_cart(<?php echo $products[0]['product_id']; ?>);">Add To Cart</button>
				</div>
				<div class="col-4">
					<a class="product-title" href="index.php?root=productdetail&id=<?php echo $products[1]['product_id']; ?>">
						<img class="img-full-width" src="<?php echo $products[1]['product_image']; ?>">
						<h4><?php echo $products[1]['product_name']; ?></h4>
					</a>
					<button class="button" type="button" onclick="add_to_cart(<?php echo $products[1]['product_id']; ?>);">Add To Cart</button>
				</div>
				<div class="col-4">
					<a class="product-title" href="index.php?root=productdetail&id=<?php echo $products[2]['product_id']; ?>">
						<img class="img-full-width" src="<?php echo $products[2]['product_image']; ?>">
						<h4><?php echo $products[2]['product_name']; ?></h4>
					</a>
					<button class="button" type="button" onclick="add_to_cart(<?php echo $products[2]['product_id']; ?>);">Add To Cart</button>
				</div>
			</div>
		</div>
		<div class="col-4">
			<h2>About Us</h2>
			<p>orbi sollicitudin rhoncus sapien at congue. Etiam luctus erat mi, ut imperdiet est commodo in. Maecenas nec nunc felis. Aliquam et congue nunc. Aenean lacus sem, hendrerit nec condimentum at, malesuada a urna. Quisque aliquet elit quis arcu sodales, malesuada iaculis tortor fringilla. Fusce bibendum convallis sapien, eget tempor turpis aliquam in.. Quisque aliquet elit quis arcu sodales, </p>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h2>Come to Our Seminar</h2>
		</div>
		<div class="col-4">
			<p>orbi sollicitudin rhoncus sapien at congue. Etiam luctus erat mi, ut imperdiet est commodo in. Maecenas nec nunc felis. Aliquam et congue nunc. Aenean lacus sem, hendrerit nec condimentum at, malesuada a urna. Quisque aliquet elit quis arcu sodales, malesuada iaculis tortor fringilla. Fusce bibendum convallis sapien, eget tempor turpis aliquam in.. Quisque aliquet elit quis arcu sodales, </p>
		</div>
		<div class="col-4">
			<img class="img-full-width" src="img/seminar1.jpg">
		</div>
		<div class="col-4">
			<img class="img-full-width" src="img/seminar2.png">
		</div>
	</div>

</div>
