<div class="right_nav_main_container">		
	<?php 
		require_once 'library/script.php';
	?>	
	<!-- <div style="max-width: 150px;"> -->
		<a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">
			<span style="color: white;">YOUR CART</span>
		</a>
		

	<!-- </div> -->

	<div class="cartitem_checkout_container">
		<div class="check_out_phpcontainer">
				<?php
					require_once 'connection.php';

					$grandtotal = 0;

			
					foreach ($_SESSION['cart'] as $key => $value) {
						$sql = "SELECT * FROM items WHERE item_id = '$key'";

						$result = mysqli_query($conn,$sql);
						if (mysqli_num_rows($result)>0) {
							while ($row = mysqli_fetch_assoc($result)) 
								{extract($row);}
							$quantity = $_SESSION['cart'][$item_id];
							$subtotal = $quantity * $item_price;
							echo " 
									<div class='cart_container'>
										<form method='POST' action='display_items.php?id=$key'>
											<div class = 'row cart_item_container'>
												<div class='cart_left col-sm-4 col-md-4'>
													<div class='cart_image_container'>
														<img src='$item_image'>
													</div>	
												</div>
																		
												<div class='cart_left col-sm-8 col-md-8'>
													<div class='cart_name_container'>
														$item_name
													</div>
													
													<div class='cart_quantity_container'>
														Quantity : $value
													</div>	
													<div class='cart_subtotal_container'>
														Subtotal : $subtotal
													</div>	
													
													<input type='submit' class='remove_item_button' name='remove_item' value='Remove Item'>

												</div>
											</div>	
										</form>
									</div>
								";
						}

						$grandtotal += $quantity * $item_price;
					}

					if (isset($_POST['remove_item'])) {
						$key = $_GET['id'];
						unset($_SESSION['cart'][$key]);
						echo "<script>alert('Item Removed')</script>";
						echo "<script>window.location='items.php'</script>";
					}
			
					if (isset($_POST['cancel_shopping'])) {
						unset($_SESSION['cart']);
						header('location:items.php');
					
					}

					if (isset($_POST['check_out_final_btn'])) {

						$guest_firstname = $_POST['guest_firstname'];
						$guest_lastname = $_POST['guest_lastname'];
						$guest_email = $_POST['guest_email'];
						$guest_number = $_POST['guest_number'];
						$guest_address = $_POST['guest_address'];
						$guest_date_ordered = $_POST['guest_date_ordered'];


						foreach ($_SESSION['cart'] as $key => $value) {
							$product_key = $key;
							$order_quantity = $value;
							$order_quantity = $_SESSION['cart'][$item_id];	

							if ($order_quantity !=0 ) {
								$sql3 = "INSERT INTO guest_customers(guest_firstname,guest_lastname,guest_number,guest_email,guest_address) VALUES ('$guest_firstname','$guest_lastname','$guest_number','$guest_email','$guest_address')";

								mysqli_query($conn, $sql3);

								$sql3 = "INSERT INTO orders (order_date, shipping_address, grand_total) VALUES ('$guest_date_ordered', '$guest_address', '$grandtotal')";

								mysqli_query($conn, $sql3);

								$sql3 = "INSERT INTO order_details (item_id, order_id, order_quantity, item_price, sub_total) VALUES ('$product_key', '$order_id', '$order_quantity', '$item_price', '$subtotal')";

								mysqli_query($conn, $sql3);
								var_dump($sql3);
								unset($_SESSION['cart']);
								echo "<script>
										alert('Order Complete!');
										window.location.replace('items.php');
										</script>
									 ";
							}
						}
					}

				?>
		</div>
			<div class="checkout_info_container panel">
				<h4>CUSTOMER INFORMATION SHEET</h4>
				<form method="POST">
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_firstname" placeholder="Firstname" required>
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_lastname" placeholder="Lastname" required>
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_email" placeholder="Email address" required>
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_number" placeholder="Mobile Numbner" required>
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_address" placeholder="Shipping Address" required>
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_date_ordered" placeholder="Date Ordered" required>
					</div>
					<input type='submit' id='check_out_button' name='remove_item' value='Submit'>
				</form>
			</div>
	</div>		

		<div class = 'grandtotal_checkout'>
			<h1>GRAND TOTAL : <?php echo $grandtotal; ?> </h1> 
			<form method='POST'>
				<input type='button' onclick='open_check_out()' id='checkout' name='checkout' value='Check Out'>
			</form>

			<div class="row cancel_shopping_container">
				<div class="col-md-5 col-lg-5">
					<form method="POST">
						<input type="submit" class="check_out_btn" name="cancel_shopping" value="Cancel Shopping" >		
					</form>
				</div>		
			</div>
		</div>
</div>
	
