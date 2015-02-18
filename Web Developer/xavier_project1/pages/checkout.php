<?php $items = fetch_cart(); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Checkout</h1>
		</div>
		<div class="col-12">
			You are here: 
			<a href="index.php?root=home">Home</a>
			&gt;
			<a href="index.php?root=cart">Cart</a>
			&gt;
			<a href="index.php?root=checkout">Checkout</a>
		</div>
		<form action="">
			<div class="col-8">
				<ul class="list-no-style cart-list">
					<?php foreach ($items as $key => $item): ?>
						<?php $product_infos = fetch_product_infos ($key); ?>
						<?php if ($item > 1): ?>
							<li>
								<h3><?php echo $product_infos['product_name']; ?> X <?php echo $item; ?></h3> 
							</li>
						<?php else: ?>
							<li>
								<h3><?php echo $product_infos['product_name']; ?></h3> 
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>

				<ul class="list-no-style checkout-list">
					<li>Name</li>
					<li><input type="text" name="name"></li>
					<li>Address</li>
					<li><input type="text" name="address"></li>
					<li>Credit Card</li>
					<li><input type="text" name="credit_card"></li>
					<li>Phone Number</li>
					<li><input type="text" name="phone_number"></li>
				</ul>
			</div>
			<div class="col-4">
				<h2>Total: $<?php echo cart_total(); ?></h2>
				<button class="button" type="button">Buy now</button>
			</div>
		</form>
	</div>
</div>