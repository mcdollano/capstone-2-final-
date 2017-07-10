
		<?php
			if (isset($_POST['check_out'])) {	
				$product_key = $key;
				$order_quantity = $quantity;

				$sql2 = "SELECT items FROM items WHERE item_id = $product_key";
				$result2 = mysqli_query($conn,$sql)
					if (mysqli_num_rows($result2)>0) {
						while ($row2 = mysqli_fetch_assoc($result2)) {
							extract($row2);
						}
					}

				if ($product_key !='')	{ 
					
						($order_quantity = !='') 
					{
						$sql3 = "INSERT INTO
							orders(item_id,order_quantity)
							VALUES 
							('$product_key','$order_quantity')";
							$result = mysqli_query($conn,$sql);
							echo "Purchase complete!";	
					}	
			}
		}

	?>