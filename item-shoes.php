<?php
	function get_title(){
			echo "Wooden Hanger - Catalog"; 
		}
	function display_content(){
	
	require 'connection.php';
	?>


<div class="catalog-container">
	<div class="catalog_header">
		<h2>CATALOG</h2>
		<a href="items.php"><span>ALL</a>
		<a href="item-shoes.php"><span>SHOES</span>
		<a href="item-bags.php"><span>BAGS</span>
		<a href="item-watches.php"><span>WATCHES</span></a>
		
		<a href='add_items.php' class='btn btn-primary' id='add_new'>Add Products</a>
		<?php 

		$sql = "SELECT * FROM items WHERE item_category LIKE '%SHOES%'"; 
			
	echo "</div>";
	
		echo "<div class = 'row item-row-container'>";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					extract($row);

					echo "<div class='col-sm-3 col-md-3 col-lg-3'>
						<div class = 'thumbnail'>
							<img src='$item_image' id='item_image'><br>
							<span>$item_name</span><br>
							<span>$item_description</span><br>
							<span>Php $item_price</span><br>
							<a href='display_items.php?id=$item_id'><button class='btn btn-primary' type='submit' name='view_more'>View Details</button></a>
						</div> 
					  </div>";//column
			} // while 
		} // if 
		
		echo "</div>" ?>;
	</div>






	
<?php
}
?>
<?php
require_once('template.php');
?>