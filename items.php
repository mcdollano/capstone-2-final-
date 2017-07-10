<?php
	function get_title(){
			echo "Wooden Hanger - Catalog"; 
		}
	function display_content(){
	require 'connection.php';
?>
	<div class='search_container'>
		<?php require 'item_filter.php'; ?>
	</div>

<?php

	if (isset($_POST['delete_item_btn'])) {
		echo $_SESSION['delete_message'];
	}
	require "index_items.php";
?>

<?php
}
?>

<?php
require_once('template.php');
?>


