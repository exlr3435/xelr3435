<?php
function fetch_all_products () {
	$sql = "SELECT * FROM products";
	$result = query($sql);

	$pruducts = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$pruducts[] = $row;
	}

	return $pruducts;
}

function fetch_product_infos ($product_id) {
	$sql = "SELECT * FROM products WHERE product_id=".$product_id;
	$result = query($sql);

	return mysqli_fetch_assoc($result);
} 

function count_cart () {
	$count = 0;

	foreach ($_SESSION['cart'] as $item) {
		$count = $count + (int)$item;
	}

	return $count;
}

function cart_total () {
	$total = 0;

	foreach ($_SESSION['cart'] as $key => $item) {
		$product = fetch_product_infos($key);
		$price = (float)$product['product_price'];
		$total = $total + ($price*(int)$item);
	}

	return $total;
}

function fetch_cart() {
	return $_SESSION['cart'];
}

function add_to_cart ($product_id) {

	if (!isset($_SESSION['cart'][$product_id])) {
		$_SESSION['cart'][$product_id] = 1;
	} else {
		$_SESSION['cart'][$product_id]++;
	}
}

function remove_from_cart ($product_id) {
	if ($_SESSION['cart'][$product_id] > 1) {
		$_SESSION['cart'][$product_id]--;
	} else {
		unset($_SESSION['cart'][$product_id]);
	}
}