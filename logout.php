<?php
 session_start();
 session_destroy();
 header('location:index.php');
?>

<?php

function get_title(){
	echo 'Wooden Hanger - Log Out';
}
function display_content(){
	echo "
		<div class = 'log-out-container'>
			<span>Logged Out Successfully!<span><br>
		 	<a href='index.php'><input type='submit' class='btn btn-primary' name='back-to-home' value='Back To Home'></a>
	 	</div>
	";
	}
// 	echo "
// Logged Out Successfully!
// <a href='index.php'><input type='submit' class='btn btn-primary' name='back-to-home' value='Back To Home'></a>
// 		";
require_once 'template.php';

?>

