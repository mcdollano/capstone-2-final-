<?php
						//register function
		
		require('connection.php');	
		if (isset($_POST['register'])) {
			$firstname = $_POST['register_firstname'];
			$lastname = $_POST['register_lastname'];
			$email = $_POST['register_email'];
			$number = $_POST['register_number'];
			$address = $_POST['register_address'];
			$username = $_POST['register_username'];
			$password = $_POST['register_password'];
			$confirm_password = $_POST['confirm_password'];

			if ($password == $confirm_password) {
				
				$password = sha1($password);
				$sql = "INSERT INTO users(user_firstname,user_lastname,user_email,user_number,user_address,user_username,user_password,user_role)
							VALUES 
						('$firstname','$lastname','$email','$number','$address','$username','$password', 'regular')";
						mysqli_query($conn, $sql);
						echo "<script>alert('Registered Successfully!')</script>";
					} else {
						echo "<script>alert('Username and Password did not match! Try again.')</script>";
					}
				}

						//login function
		
		if (isset($_POST['login'])) {   
			$username = $_POST['login_username'];
			$password = $_POST['login_password'];
			$password = sha1($password);
			
			$sql = "SELECT * FROM users WHERE user_username = '$username' AND user_password = '$password'";

			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					extract($row);
					$_SESSION['user_id'] = $user_id;
					$_SESSION['firstname'] = $user_firstname;
					$_SESSION['role'] = $user_role;
					echo "<script>alert('Logged In Successfully!')</script>";
						echo "<script>window.location='index.php'</script>";	
				}
			} else {
				echo "<script>alert('Username and Password did not match! Try again.')</script>";
			}
		}

					// navbar display username

	$displayname = "";
	$sign_in = "";
	    if(isset($_SESSION['firstname'])){
		    $displayname = $_SESSION['firstname'];
		    $sign_in = "Sign In";
		}
					// ADD ITEMS

	if (isset($_POST['add_new'])) {
		$name = $_POST['item_name'];
		$description = $_POST['item_description'];
		$image = "item_images/" . $_POST['item_image'];
		$price = $_POST['item_price'];
		$category = $_POST['item_category'];
		$brand = $_POST['item_brand'];
		$quantity = $_POST['item_quantity'];

		$sql1 = "SELECT * FROM items";
		$result1 = mysqli_query($conn,$sql1);
			if (mysqli_num_rows($result1)>0) {
				while ($row1 = mysqli_fetch_assoc($result1)) {
					extract($row1);
					$_SESSION['item_name'] = $name;
					$_SESSION['item_quantity'] = $quantity;
					$_SESSION['item_image'] = $image;
				}
			}

		if ($name != '' && $description != '' && $image != '' && $price != '' && $category !='' && $quantity !='') 
		 {
		 	$sql2 = "INSERT INTO 
		 		items(item_name,item_description,item_image,item_price,item_category,item_brand,item_quantity) VALUES
		 		('$name','$description','$image','$price','$category','$brand',$quantity)";
		 		$result = mysqli_query($conn,$sql2);
		 		header('location:items.php');
		 		

		 	echo "Item Added Successfully!";
		 } else {
		 	echo "<p class='error_msg'>Error! Fill in the blank fields! </p>";

		 }
	}  

	if (isset($_POST['cancel_add'])) {
		header('location:items.php');
	}


	
