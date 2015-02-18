<?php
	if (!isset($_GET['id'])) {
		header('Location: index.php?root=products');
		die();
	} else if (!$product_infos = fetch_product_infos($_GET['id'])) {
		header('Location: index.php?root=products');
		die();
	}
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1><?php echo $product_infos['product_name']; ?></h1>
		</div>
		<div class="col-12">
			You are here: 
			<a href="index.php?root=home">Home</a>
			&gt;
			<a href="index.php?root=products">Products</a>
			&gt;
			<a href="index.php?root=productdetail&id=<?php echo $product_infos['product_id']; ?>"><?php echo $product_infos['product_name']; ?></a>
		</div>
		<div class="col-8">
			<img class="img-full-width" src="<?php echo $product_infos['product_image']; ?>" alt="product image">
		</div>
		<div class="col-4">
			<h3>Price: $<?php echo $product_infos['product_price']; ?></h3>
			<p>
				<?php echo $product_infos['product_desc']; ?>
			</p>
			<button class="button" type="button" onclick="add_to_cart(<?php echo $product_infos['product_id']; ?>);">Add to Cart</button>
		</div>
	</div>
</div>