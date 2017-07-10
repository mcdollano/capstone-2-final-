<?php
	require_once 'connection.php';
	session_start();
	$id = $_GET['id'];
	$quantity = $_POST['quantity'];
	// $subtotal = $_POST['subtotal'];
	
	$addtocartmsg = "Item Successfully added to cart!";

			if (isset($_POST['cartBtn'])) {
				$_SESSION['cart'][$id] += $quantity;
				$_SESSION['addtocartmsg'] = $addtocartmsg;
			}

			header("location:display_items.php?id=$id");

?>
