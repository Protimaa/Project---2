<?php

include 'db.php';



	$product_id  = $_GET['product_id'];
	
	$deleteProduct = mysql_query("DELETE FROM `productinfo` WHERE product_id = '$product_id'");
	
	header('location:viewProduct.php');
	?>