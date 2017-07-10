<?php
 session_start();
 session_destroy();
?>

<?php

function get_title(){
	echo 'Wooden Hanger - Log Out';
}
function display_content(){
	echo "
		<div class = 'log-out-container'>
			<span>You have cancelled your shopping!<span><br>
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

