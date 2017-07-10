<?php
	
require_once 'connection.php';
$id = $_GET['id'];

 	if (isset($_POST['delete_item_btn'])) {
 		$sql3 = "DELETE FROM items WHERE item_id = '$id'";
 		mysqli_query($conn,$sql3);
 		echo "Item Deleted Successfully!";
 		echo "<a href='items.php'>
				<input type='button' class='btn btn-default edit-btn' value='Back to Catalog'>
				</a>";
 	}

 	if(isset($_POST['cancel'])) {
	header("location:display_items.php?id=$id");
	}

 	if(mysqli_num_rows($result) > 0) {
 		while ($row = mysqli_fetch_assoc($result)) {
 			extract($row);

 		}
 	}
?>	









