<?php $products = fetch_all_products(); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="big-title">Products</h1>
		</div>
		<div class="col-12">
			You are here: 
			<a href="index.php?root=home">Home</a>
			&gt;
			<a href="index.php?root=products">Products</a>
		</div>
		<?php foreach ($products as $product): ?>
			<div class="col-4 text-center">
				<div class="product-box">
					<a class="product-title" href="index.php?root=productdetail&id=<?php echo $product['product_id']; ?>">
						<h2 class="medium-title"><?php echo $product['product_name']; ?></h2>
						<img class="img-full-width image-border" src="<?php echo $product['product_image']; ?>">
					</a>
				</div>
	        </div>
		<?php endforeach; ?>
    </div> 
</div>