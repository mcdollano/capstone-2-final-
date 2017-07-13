   	<?php
	function get_title(){
		echo "Wooden Hanger PH";
	}
	function display_content(){
	require 'connection.php';
	?>

		<div class="banner-container">
		</div>
		<hr>

		<h2>FEATURED BRANDS</h2>
		<div class="container">
			<div class="row featured_brands">
				<div class="col-sm-4 col-md-4 col-lg-4 featured_firstcol">
					<img src="images/1.png">
					<img src="images/2.png">
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 featured_firstcol">
					<img src="images/3.png">
					<img src="images/4.png">
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 featured_firstcol">
					<img src="images/5.png">
					<img src="images/6.png">
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2" ></div>
			</div>
		</div>

		
<?php
echo "<hr>";
require "index_items.php";
//display_content
?>
	

<?php
}
require_once 'template.php';
?>