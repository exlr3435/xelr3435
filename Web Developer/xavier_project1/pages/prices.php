<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="big-title">Prices</h1>
		</div>
		<div class="col-12">
			You are here: 
			<a href="index.php?root=home">Home</a>
			&gt;
			<a href="index.php?root=prices">Prices</a>
		</div>
		<?php $products = fetch_all_products (); ?>
		<div class="col-4">
			<a class="product-title" href="index.php?root=productdetail&id=<?php echo $products[0]['product_id']; ?>">
				<img class="img-full-width" src="<?php echo $products[0]['product_image']; ?>">
				<h3><?php echo $products[0]['product_name']; ?></h3>
				<h5>Price: $<?php echo $products[0]['product_price'] ?></h5>
			</a>
			<button class="button" type="button" onclick="add_to_cart(<?php echo $products[0]['product_id']; ?>);">Add To Cart</button>
		</div>
		<div class="col-4">
			<a class="product-title" href="index.php?root=productdetail&id=<?php echo $products[1]['product_id']; ?>">
				<img class="img-full-width" src="<?php echo $products[1]['product_image']; ?>">
				<h3><?php echo $products[1]['product_name']; ?></h3>
				<h5>Price: $<?php echo $products[1]['product_price'] ?></h5>
			</a>
			<button class="button" type="button" onclick="add_to_cart(<?php echo $products[1]['product_id']; ?>);">Add To Cart</button>
		</div>
		<div class="col-4">
			<a class="product-title" href="index.php?root=productdetail&id=<?php echo $products[2]['product_id']; ?>">
				<img class="img-full-width" src="<?php echo $products[2]['product_image']; ?>">
				<h3><?php echo $products[2]['product_name']; ?></h3>
				<h5>Price: $<?php echo $products[2]['product_price'] ?></h5>
			</a>
			<button class="button" type="button" onclick="add_to_cart(<?php echo $products[2]['product_id']; ?>);">Add To Cart</button>
		</div>
	</div>
</div>