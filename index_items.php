<div class="catalog-container">
	<div class="catalog_header">
		<div class="catalog_header_container">
			<h2>CATALOG</h2>
			<a href="items.php"><span class="item_button">ALL&nbsp;</span></a>
			<a href="items.php?cat=Shoes"><span class="item_button">SHOES&nbsp;</span></a>
			<a href="items.php?cat=Bags"><span class="item_button">BAGS&nbsp;</span></a>
			<a href="items.php?cat=Watches"><span class="item_button">WATCHES&nbsp;</span></a>

		<div class='item_filter_container'>
			<!-- <?php require 'item_filter.php'; ?> -->
		</div>

		</div> <!--catalog_header_container-->
	</div>	<!--catalog header -- >

	  <!-- Modal -->
	 	<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Modal Header</h4>
		        </div>
		        <div class="modal-body">
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM items WHERE item_id = '$id'";
			$result = mysqli_query($conn,$sql);

			if(mysqli_num_rows($result)) {
				while($row = mysqli_fetch_assoc($result)) {
					extract($row);
				}
			}
		?>
		          	<div class="row">
						<div class="col-md-6">
							<h2><?php echo $item_name; ?></h2>
							<img id='delete_pic' src= <?php echo $item_image ?>>
						</div>
						<div class="col-md-6">
							<p><?php echo $item_description; ?></p>
						</div>
					</div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		    </div>
		</div>
</div>
	
	<?php 

	//SEARCH BAR
	// DISPLAY ITEMS
	echo "<div id ='catalog-container'>";
	if(!isset($_GET['cat'])){
		$sql = "SELECT * FROM items WHERE item_name LIKE '%$name%'";
	} else {
		$cat = $_GET['cat'];
		$sql = "SELECT * FROM items WHERE item_name LIKE '%$name%' && item_category or item_brand ='$cat'";

	}
			echo "<div class = 'row item-row-container'>";
				$result = mysqli_query($conn,$sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						extract($row);

						echo "<div class='col-sm-6 col-md-3 col-lg-3'>
								<a href='display_items.php?id=$item_id'>
									<div class = 'thumbnail'>
										<img src='$item_image' id='item_image' class='item_image'><br>
										<div class = 'middle'>	
										</div>
										<p>$item_name</p>
										<p id='thumbnail_price'>Php $item_price</p>
									</div> 
								</a>
						 	 </div>";//column
				} // while 
			} else {
				echo "
					<div class='no_item_container'>
						<div class='no_item_content row'>
							<p class='panel'>No available item in this category.</p>
						</div>
					</div>	
				</div>
				";
			}
	echo "</div>" ?>

