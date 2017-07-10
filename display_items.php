<?php 

function get_title() {
	echo "Display Items";
}

function display_content() {
	require_once 'connection.php';
	global $conn;
	$id = $_GET['id'];
	$sql = "SELECT * FROM items WHERE item_id = '$id'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0) {
		while($row = mysqli_fetch_assoc($result)) {
			extract($row); 
?>
	<?php
		if (isset($_POST['cartBtn']) && [$id] == $id){
			echo $_SESSION['addtocartmsg'];
		}
	?>

	<form method="POST">
		<div class="row display_items_container">
			<div class="col-sm-6 col-md-6 col-lg-6" id="item_pic_container">
				<img id='item_pic' src= <?php echo $item_image;?>>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6 descript_text">
				<div class="name_price_container">
					<div class="display_item_name hide_item" id="item_hide">
						<span class="disp_name"><?php echo $item_name;?></span>
					</div> 
					<div class="display_item_price hide_item" id="item_hide">	
						<span class="disp_price">Php <?php echo $item_price;?></span>	
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
		
		<?php
			if (isset($_SESSION ['role']) && $_SESSION['role'] == 'admin') {
				echo "
					<a href = 'edit_items.php?id=$id'>
							<input type='button' class='btn btn-default edit-btn' value='Edit'>
						</a>

						<input type='button' id ='cancel_edit' class='btn btn-default' name='cancel' value='Cancel' style = 'display:none';> 

						<a href='items.php'>
							<input type='button' class='btn btn-default cancel-btn' name='cancel' value='Back To Catalog'>
						</a>
							<a href = 'delete_items.php?id=$id'>	
							<input type='button' class='btn btn-default delete-btn' name='deleteBtn' value='Delete Product'>
	
						";
						
				} else {

					echo "
					<a href='items.php'>
						<input type='button' class='btn btn-default cancel-btn' name='cancel' value='Back To Catalog'>
					</a>

							<input type='button' onclick='showcart()' id='showcartBtn' class='btn btn-default' name='show_cart' value='Buy Now'>			
		
				";}
				?>
			
				<form method="POST">
					<div class="item_price_container">
						<span> Price : </span>
						<span id="item_price_js">
							<?php echo $item_price;?> <!--get element .html, put an id-->
						</span>
					</div>
					<br>
				</form>

				<?php 
					if (isset($_POST['cartBtn'])) {
						echo $_SESSION['addtocart_msg'];
					}
				?>

				<div id="addtocart_container" class="addtocart">
					<form method = "POST" action="addtocart.php?id=<?php echo $id; ?>">			
						<span>Quantity :</span>
						  <input type="number" onchange="getSubtotal()" id="item_quantity_js" name="quantity" min="1" max= <?php echo $item_quantity;?>> 
						<br>
						<span>Subtotal : </span><input type="text" id="getSub" name="subtotal">  
						<br>
						<input type="submit" onclick="openNav2()" name="cartBtn" value="Add to cart" class="add_to_cart">
						<input type='button' onclick='hidecart()' id='cancelcartBtn' class='btn btn-default' name='cancel_cart' value='Cancel'>	
					</form>
				</div>

				<p id="prod"></p>
			</div> <!--item desc -->
		</div> <!--container-->


<?php
		} // while($row = mysqli_fetch_assoc($result))
	} // if(mysqli_num_rows($result)>0) {
} // function display_content
require_once 'template.php';
?>