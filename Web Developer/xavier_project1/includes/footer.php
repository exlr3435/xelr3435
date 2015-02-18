		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-4">
						<ul class="delete-bullet align-center">
							<li><a href="index.php?root=home">Home</a></li>
							<li><a href="index.php?root=prices">Prices</a></li>
						</ul>
					</div>
					<div class="col-4">
						<ul class="delete-bullet align-center">
							<li><a href="index.php?root=products">Products</a></li>
							<li><a href="index.php?root=contact">Contact</a></li>
						</ul>
					</div>
					<div class="col-4">
						<img class="img-full-width logo" src="img/logo.png">
					</div>
				</div>
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script>
			function add_to_cart(id) {
				$.ajax({
					url: "addtocart.php?id=" + id,
					dataType: "json",
					success: function (response) {
						alert('Item added to cart.');
						window.location.reload()
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert('Item failed to include to cart.');
					}

				}); 
			}
			function remove_from_cart(id) {
				$.ajax({
					url: "removefromcart.php?id=" + id,
					dataType: "json",
					success: function (response) {
						alert('Item removed from cart.');
						window.location.reload()
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert('Item failed to remove.');
					}

				}); 
			}
		</script>
	</body>
</html>