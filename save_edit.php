<?php
require_once 'connection.php';
session_start();
$id = $_GET['id'];

		if(isset($_POST['save_button'])) {
			$name = $_POST['edit_item_name'];
			$description = $_POST['edit_item_description'];
			$price = $_POST['edit_item_price'];
			$quantity = $_POST['edit_item_quantity'];
			$category = $_POST['edit_item_category'];
			$image = "item_images/" . $_POST['edit_item_image'];

			$sql2 = "UPDATE items SET item_name ='$name', item_description ='$description', item_price='$price',item_category='$category', item_quantity ='$quantity', item_image='$image' WHERE item_id='$id'";
				mysqli_query($conn,$sql2);
				$_SESSION['alert'] = 'dasdjhasjhdjasdhjahs';
				header("location:display_items.php?id=$id");
		} //if isset
?>