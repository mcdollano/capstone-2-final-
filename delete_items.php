<?php

 	function get_title(){
 		echo "Delete Items";
 	}

 	function display_content(){
 	require_once 'connection.php';
 	global $id;
 	global $conn;
 	$id = $_GET['id'];
 	$sql = "SELECT * FROM items WHERE item_id = '$id'";
 	$result = mysqli_query($conn,$sql);
 	if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	extract($row);

	if (isset($_POST['delete_item_btn'])) {

		$sql3 = "DELETE FROM items WHERE item_id = '$id'";
		mysqli_query($conn,$sql3);
		header('location:items.php');
		$_SESSION['delete_message'] = "Item Deleted Successfully!";
	}
	
?>	
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6">
			<img id='item_pic' src= <?php echo $item_image;?>>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6 delete_item_container">	
			<form method="POST">	
				<div class="name_price_container">
					<div class="display_item_name hide_item" id="item_hide">
						<span class="disp_name">
							<?php echo $item_name;?>	
						</span>
					</div> 
					<div class="display_item_price hide_item" id="item_hide">	
						<span class="disp_price">Php <?php echo $item_price;?>
						</span>	
					</div> 
				</div>
				<div class="panel-container">
					<h4>Product Description:</h4>
					<div class="panel panel-default">
						<div class="panel-body">
						   	<?php echo $item_description;?>
						</div>
					</div>
				</div>								
			</form>	
			<div>
				<p>
					Are you sure you want to delete this item?
				</p>
				<form method="POST">
					<input type='submit' id ='delete_item_btn' class='btn btn-danger delete_item_btn' name="delete_item_btn" value='Delete'>
					<a href ="items.php">
						<input class="btn btn-default cancel_btn" type="button" name="cancel" value="Cancel">
					</a>
				</form>
			</div>	
		</div> <!--column-->
	</div> <!--row-->
<?php
		}
	}
} // function display content

require_once 'template.php';

?>




