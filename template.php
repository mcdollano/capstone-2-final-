<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php get_title()?></title>
	<meta charset="UTF-8 (Without BOM)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Source+Sans+Pro|Lato|Oswald|Questrial|Anton" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/path/to/bootstrap.min.css">
	<script src="/path/to/jquery.min.js"></script>
	<script src="/path/to/bootstrap.min.js"></script>
   	
</head>
<body id="body">

	<?php
		require_once 'partials/nav.php';
		// require_once 'addtocart.php';
		// require_once 'rightnav.php';
		// require_once 'cartnav.php';
		// require_once 'partials/items.php';
		require_once 'library/script.php';
		require_once 'library/script.js';
		display_content();
		require_once 'partials/footer.php';
	?>

</body>
</html>