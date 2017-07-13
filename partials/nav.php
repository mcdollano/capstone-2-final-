<div class="nav_container">

	<?php 
		require_once 'library/script.php';
	?>	

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="nav_close_btn">
			&times;
		</a>
		<a href="index.php">Home</a>
		<a href="#">About Us</a>
		<a href="items.php">Catalog</a>
		<a href="#">Blog</a>

		<?php
			if (isset($_SESSION['cart'])) {
			echo "
				<a href='#'' id='cart_side_bar' onclick='openNav2()' onclick='closeNav()'>OPEN CART</a>
				";				
			}	
		?>

		<?php

			if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
				echo " <a href='add_items.php' id='add_new' style='margin-left:0;'>Add Products</a>	
			";}		

			if(isset($_SESSION['firstname'])){ 
				echo "<a href ='logout.php' id ='logout-sidenav' style='margin-left:0;'>Sign Out</a>";
			}else { 
				echo "<a href='login.php' id='login-sidenav' style='margin-left:0;'>Sign In</a>";
			}
		?>
		
	</div>

	<div id="navbar-main">
		<span id="navbtn" style="font-size:30px;cursor:pointer" onclick="openNav()" onclick="closeNav()">&#9776;</span>		
		<a href="index.php"><img src="images/woodenhanger_logo.png" id="brand_logo"></a>

		<?php
			if(isset($_SESSION['firstname'])){ ?>
			<?php echo "
					<span id='displayname' class='display_name'> 
						<span id='logged_in_as'>Logged in as : </span> 
						<span id='display_username' onclick='myFunction()' class='dropbtn'>
							$displayname |  
						</span>

						<a href='logout.php' id='sign_out_btn'>
							Sign Out
						</a>
					</span>";?>
		
		<?php }else { ?>
			<a href='login.php' id="login"> Sign In </a>
		<?php } ?>

		<?php
			if (isset($_SESSION['cart'])) {
			echo "
				<img src='images/cart_icon.png' style='font-size:30px;cursor:pointer;' id='cart_icon' onclick='openNav2()'' onclick='closeNav2()'>

				<span class = 'badge' id='cart_badge'>";
					if (isset($_SESSION['cart'])) {
						echo count($_SESSION['cart']);
					} else {
						echo "0";
					}
			echo "</span>";	
			
			}	
		?>
	
	</div>

	<div id="mySidenav2" class="sidenav2">
		<?php require_once 'rightnav.php'; ?>
	</div>
</div>


	