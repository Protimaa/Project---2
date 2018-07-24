<?php

include 'db.php';
	
	$cashier_id  = $_GET['cashier_id'];
	
	$delete = mysql_query("DELETE FROM `cashierinfo` WHERE cashier_id = '$cashier_id'");
	
	header('location:viewAllCashier.php');

?>















