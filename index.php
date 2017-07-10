   	<?php
	function get_title(){
		echo "Wooden Hanger PH";
	}
	function display_content(){
	require 'connection.php';
	?>

		<div class="row banner-container">
			<div class="col-sm-6 col-md-6 col-lg-6 banner-caption">
				<h1>MICHAEL KORS</h1>
				<h1>HYBRID WATCH</h1>
				<h2>The best of both worlds.</h2>
				<a class="waves-effect waves-light btn banner-btn">BUY NOW</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6 banner-image-container">
				<img src="images/watch_model_female.jpg" id="banner-image">
			</div>
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