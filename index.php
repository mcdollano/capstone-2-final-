   	<?php
	function get_title(){
		echo "Wooden Hanger PH";
	}
	function display_content(){
	require 'connection.php';
	?>

		<!-- <div class="banner-container"> -->
			<video muted autoplay loop>
				<source src="banner_video.mp4">
			</video>
		<!-- </div> -->
		
		<h2>FEATURED BRANDS</h2>
		<div class="container">
			<div class="row featured_brands">
				<div class="col-sm-4 col-md-4 col-lg-4 featured_firstcol">
				<a href="items.php?cat=Michael Kors">
					<img src="images/1.png">
				</a>
				<a href="items.php?cat=Herschel">	
					<img src="images/2.png">
				</a>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 featured_firstcol">
				<a href="items.php?cat=G-SHOCK">
					<img src="images/3.png">
				</a>	
				<a href="items.php?cat=anello">
					<img src="images/4.png">
				</a>	
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 featured_firstcol">
				<a href="items.php?cat=coach">
					<img src="images/5.png">
				</a>
				<a href="items.php?cat=tory burch">
					<img src="images/6.png">
				</a>	
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