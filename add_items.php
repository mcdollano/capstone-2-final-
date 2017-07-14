<?php

function get_title(){
	echo 'Add New Item';
}

function display_content(){ ?>
	<div class="add-item-container panel">
		<h2>Add New Item</h2>
		<form method="POST">	
			<div class="form-group">
				<label for="item_name"><h4>Name :<h4></label>
				<input type="name" class="form-control" name="item_name" id="item_name" required>
			</div>
			<div class="form-group">	
				<label for="item_description"><h4>Description :<h4></label>
				<input type="textarea" class="form-control" name="item_description" id="item_description" required>
			</div>
			<div class="form-group">
				<label for="item_price"><h4>Price :<h4></label>
					<input type="textarea" class="form-control" name="item_price" id="item_description" required>
			</div>
			<div class="form-group">
				<label for="item_category"><h4>Category :<h4></label>
				<select class="form-control" name="item_category">
					<option>Shoes</option>
					<option>Bags</option>
					<option>Watches</option>
				</select>
			</div>
			<div class="form-group">
				<label for="item_category"><h4>Quantity :<h4></label>
				<input type="textarea" class="form-control" name="item_quantity" id="item_description" required>
			</div>
			<div class="form-group">
				<label for="item_category"><h4>Brand :<h4></label>
				<select class="form-control" name="item_brand">
					<option>Coach</option>
					<option>G Shock</option>
					<option>Herschel</option>
					<option>Anello</option>
					<option>Tory Burch</option>
					<option>Michael Kors</option>					
					<option>Tory Burch</option>
				</select>
			</div>
			<div class="form-group upload_image_container">
				<label for="item_image"><h4>Upload Image :<h4></label>
				<input type="file" name="item_image" required>
			</div>
		
			<input type="submit" name="add_new" class="add_item_btn" value="Add Items">

			<a href="items.php">
				<input type="button" name="cancel_add" class="cancel_add_items" value="Cancel">
			</a>	

		</form>	

	
	</div>

<?php
}
require_once 'template.php';
?>