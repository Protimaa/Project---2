<?php

protected $connection;
public function __construct(){


	$host_name = 'localhost';
	$user_name = 'root';
	$password = "";
	$db_name = 'supershop_db';
	$this->connection = mysql_connect($host_name,$user_name,$password,$db_name);


}

public function login($data){
   $email = $_POST['email'];
			$password = $_POST['password'];

	$sql = "SELECT * FROM tbl_login WHERE email = '$email', and password = '$password'";
	$q=mysql_query($this->connection,$sql);
	$l=mysql_fetch_assoc($q);

	if($l){
		header('Location:index.php');
	}
}


?>