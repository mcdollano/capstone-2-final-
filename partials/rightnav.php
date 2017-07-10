	<?php 
		require_once 'library/script.php';
	?>	
	<div style="max-width: 150px;">
		<span>YOUR CART<a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">
			&times;</a>
		</span>
	</div>
<div>	
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
										<form method='POST'>
											<div class = 'row'>
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
												</div>	
											</div>	
										</form>
									</div>
								";
						}

						$grandtotal += $quantity * $item_price;
					}

					echo "<div style = 'margin-left:10px; max-width:450px;'>GRAND TOTAL : " . $grandtotal . "<br><br></div>"; 
					
					if (isset($_POST['cancel_shopping'])) {
						unset($_SESSION['cart']);
					
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

								$sql3 = "INSERT INTO order_details (order_quantity, item_price, sub_total) VALUES ('$order_quantity', '$item_price', '$subtotal')";

								mysqli_query($conn, $sql3);

								unset($_SESSION['cart']);
							}
						}
					}

					// var_dump($_SESSION);


			
				// foreach ($_SESSION['cart'] as $key => $value) {
				// 	if (isset($_POST['check_out'])) {  	
				// 		$product_key = $key;
				// 		$order_quantity = $value;
				// 		$user_id = $_SESSION['user_id'];


				// 		$sql2 = "SELECT items FROM items WHERE item_id = $product_key";
				// 		$result2 = mysqli_query($conn,$sql);
				// 			if (mysqli_num_rows($result2)>0) {
				// 				while ($row2 = mysqli_fetch_assoc($result2)) {
				// 					extract($row2);

				// 			  	}
				// 			}

				// 		if (($product_key !='')) 

				// 			{
				// 				if ($order_quantity != 0) {
				// 					$sql3 = "INSERT INTO orders (item_id, order_quantity)
				// 						VALUES ('$product_key','$order_quantity')";

				// 						$result3 = mysqli_query($conn,$sql3);
										
				// 						// echo "Purchase complete!";
				// 						unset($_SESSION['cart']);
				// 				}
				// 			}	
				// 	}
				// }

				?>
		</div>
			<div class="checkout_info_container">
				<h4>CHECK OUT</h4>
				<form method="POST">
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_firstname" placeholder="Firstname">
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_lastname" placeholder="Lastname">
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_email" placeholder="Email address">
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_number" placeholder="Mobile Numbner">
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_address" placeholder="Shipping Address">
					</div>
					<div class="form-group">
						<input type="text" class="checkout_key form-control" name="guest_date_ordered" placeholder="Date Ordered">
					</div>
					<input type="submit" name="check_out_final_btn" value="Check Out">
				</form>
			</div>
			<hr>
	</div>		
		<div class="check_out_btn_container">
			<form method="POST">
				<input type="submit" name="cancel_shopping" value="Cancel Shopping"		
			</form><br>

			<form method="POST">
				<input type="button" onclick="open_check_out()" id="checkout" name="checkout" value="Open Check Out">
			</form>

			<form method="POST">
				<input type="submit" name="check_out" value="Check Out">
			</form>
		</div>

</div>
	
