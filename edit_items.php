<?php
	function get_title() {
		echo "Edit Items";
	}

	function display_content() {
	require_once 'connection.php';
	global $id;
	global $conn;
	$id = $_GET['id'];
	$sql = "SELECT * FROM items WHERE item_id = '$id'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	extract($row);
	
?> <!--first php -->

<div class="row" id="form_container">
	<form method="POST" action="save_edit.php?id=<?php echo $id; ?>">
		<div class="col-sm-6 col-md-6 col-lg-6 item_pic_container style='padding:0;'">
			<img id='item_pic' src= <?php echo $item_image; ?>>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6" id="description_container panel">
			<div class="display_item_name1 show_item" id="item_show"> <!--hidden-->	
					<div class="form-group">
						<div class="item_title_container">
							<label for="item_name">
								<h4>Item Name :</h4>
							</label>
						</div>
						<input type="text" class="form-control" name="edit_item_name" value="<?php echo $item_name;?>">
					</div>
			</div> 
			<div class="display_item_brand1 show_item" id="item_show"> <!--hidden-->	
					<div class="form-group">
						<div class="item_title_container">
							<label for="item_name">
								<h4>Item Brand:</h4>
							</label>
						</div>
						<select class='form-control show_item' name='edit_item_brand'>
						<option>Michael Kors</option>
						<option>Herschel</option>
						<option>G-SHOCK</option>
						<option>Anello</option>
						<option>Coach</option>
						<option>Tory Burch</option>
					</select>
					</div>
			</div> 
			<div class="display_item_price1 show_item" id="item_show">
					<div class="form-group">
						<div class="item_title_container">
							<label for="item_price"><h4>Price :</h4></label>
						</div>
						<input type="text" class="form-control" name="edit_item_price" value="Php <?php echo $item_price;?>">
					</div>
			</div> <!--hidden-->		
			<div class="display_item_quantity1 show_item" id="item_show">
					<div class="form-group">
						<div class="item_title_container">
							<label for="item_quantity"><h4>Quantity of Stocks :</h4></label>
						</div>	
						<input type="text" class="form-control" name="edit_item_quantity" value="<?php echo $item_quantity;?>">
					</div>
			</div> <!--hidden-->
			<div class="display_item_description1 show_item" id="item_show">
					<div class="form-group">
						<div class="item_title_container">
							<label for="item_description">
								<h4>Item Description :</h4>
							</label>
						</div>	
						<input type="text" class="form-control" name="edit_item_description" value="<?php echo $item_description;?>">
					</div>
			</div><!--hidden-->
				<div class='form-group'>
					<div class="item_title_container">
						<h4>
							Category :
						</h4>
					</div>
					<select class='form-control show_item' name='edit_item_category'>
						<option>Shoes</option>
						<option>Bags</option>
						<option>Watches</option>		
					</select>
				</div>
			<div class="display_item_upload1 upload_item" id="item_show">
					<div class="form-group">
						<div class="item_title_container">
							<label for="item_image">
								<h4>Upload Image :</h4>
							</label>
						</div>
						<input type="file" name="edit_item_image" value="<?php echo $item_image;?>">
					</div>
			</div>
					<div class="form-group edit_save">
						<div class="item_title_container">
							<p>Are you sure you want to save changes?
							</p>
						</div>
					</div>

					<div class="edit_option_btn">
						<input type="submit" name="save_button" class="edit_item_save" value="Save">
					
	</form>
						<a href="items.php">
							<input type="button" class="edit_item_cancel" name="cancel" value="Cancel">
						</a>
					</div>	
		</div><!--description_container-->
</div>

<?php
		} // while($row = mysqli_fetch_assoc($result))
	} // if(mysqli_num_rows($result) > 0)
} // function display content

require_once 'template.php';

?>