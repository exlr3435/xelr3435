<?php $items = fetch_cart(); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Your Cart</h1>
		</div>
		<div class="col-12">
			You are here: 
			<a href="index.php?root=home">Home</a>
			&gt;
			<a href="index.php?root=cart">Cart</a>
		</div>
		<div class="col-8">
			<ul class="list-no-style cart-list">
				<?php foreach ($items as $key => $item): ?>
					<?php $product_infos = fetch_product_infos ($key); ?>
					<?php if ($item > 1): ?>
						<li>
							<h3><?php echo $product_infos['product_name']; ?> X <?php echo $item; ?></h3> 
							<h4>Price: $<?php echo $product_infos['product_price']; ?></h4>
							<button class="remove-button" type="button" onclick="remove_from_cart(<?php echo $product_infos['product_id']; ?>)">Remove</button>
						</li>
					<?php else: ?>
						<li>
							<h3><?php echo $product_infos['product_name']; ?></h3> 
							<h4>Price: $<?php echo $product_infos['product_price']; ?></h4>
							<button class="remove-button" type="button" onclick="remove_from_cart(<?php echo $product_infos['product_id']; ?>)">Remove</button>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="col-4">
			<h2>Total: $<?php echo cart_total(); ?></h2>
			<a class="button" href="index.php?root=checkout">Checkout</a>
		</div>
	</div>
</div>