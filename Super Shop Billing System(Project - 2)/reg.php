<?php
include 'db.php';
if(isset($_POST['submit-btn'])){
			
			$password = $_POST['password'];
			$email = $_POST['email'];
			
			$insert = mysql_query("INSERT INTO `tbl_login`(`email`, `password`) VALUES ('$email','$password')");
			
			
			
			if(!$insert){
				echo mysql_error(); 
			}
			else{
				echo "inserted ";
			}
			}
?>