<?php
	require_once 'connection.php';

	$name = "";
	$sql = "SELECT DISTINCT item_category FROM items";
	$result = mysqli_query($conn,$sql);

	if (isset($_POST['search'])) {
		$name = $_POST['item_name'];
	}

	echo "	<div class = 'item-filter-container'>
				<form method = 'POST'>
						<input type = 'text' name = 'item_name'  placeholder = 'Search Items'>
						<input class = 'btn btn-primary' type = 'submit' name = 'search' value = 'Search'>
				</form>
			</div>
		
		";
	
	if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result))
		{extract($row);}
	}
?>

