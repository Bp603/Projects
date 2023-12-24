<?php
$connect = mysqli_connect("localhost", "root", "", "project");

if (isset($_POST["btnsrc"])) {
	if (isset($_SESSION["shopping_cart"])) {
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["mname"],
				'item_price'		=>	$_POST["price"],
				'item_quantity'		=>	$_POST["qnty"],
				'item_total'		=>	$_POST["total"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Item Already Added")</script>';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["mname"],
			'item_price'		=>	$_POST["price"],
			'item_quantity'		=>	$_POST["qnty"],
			'item_total'		=>	$_POST["total"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}