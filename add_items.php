<?php

function get_title(){
	echo 'Add New Item';
}

function display_content(){ ?>
	<div class="add-item-container">
		<form method="POST">
			<h2>Add New Item</h2>
			<div class="form-group">
				<label for="item_name"><h4>Name:<h4></label>
				<input type="name" class="form-control" name="item_name" id="item_name">
			</div>
			<div class="form-group">
				<label for="item_description"><h4>Description:<h4></label>
				<input type="textarea" class="form-control" name="item_description" id="item_description">
			</div>
			<div class="form-group">
				<label for="item_price"><h4>Price:<h4></label>
					<input type="textarea" class="form-control" name="item_price" id="item_description">
			</div>
			<div class="form-group">
				<label for="item_category"><h5>Category:<h5></label>
				<select class="form-control" name="item_category">
					<option>Shoes</option>
					<option>Bags</option>
					<option>Watches</option>
				</select>
			</div>
			<div class="form-group">
				<label for="item_category"><h5>Quantity:<h5></label>
				<input type="textarea" class="form-control" name="item_quantity" id="item_description">
			</div>
			<div class="form-group">
				<label for="item_category"><h4>Brand:<h4></label>
				<select class="form-control" name="item_brand">
					<option>Coach</option>
					<option>G Shock</option>
					<option>Herschel</option>
					<option>Kate Spade</option>
					<option>Long Champ</option>
					<option>Michael Kors</option>					
					<option>Tory Burch</option>
				</select>
			</div>
			<div class="form-group">
				<label for="item_image"><h4>Upload Image:<h4></label>
				<input type="file" name="item_image">
			</div>
			<input type="submit" name="add_new" class="btn btn-primary" value="Add Items">
			<input type="submit" name="cancel_add" class="btn btn-default" value="Cancel">
		</form>		
	</div>

<?php
}
require_once 'template.php';
?>