<?php
	require_once 'connection.php';
	session_start();
	$id = $_GET['id'];
	$quantity = $_POST['quantity'];

			if (isset($_POST['cartBtn'])) {
				$_SESSION['cart'][$id] += $quantity;
			}	

			echo "<script>alert('Item Added To Cart Successfully!');</script>";
			header("location:display_items.php?id=$id");
				

?>
