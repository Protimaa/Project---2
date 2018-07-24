<?php
mysql_connect("localhost","root","");
$db = mysql_select_db("supershop_db");
if(!$db){
	echo "Not Connected";
}
else{
	echo "Connected";
}
?>