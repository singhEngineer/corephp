<?php
$servername="localhost";
$username="root";
$password="";
$db = "demo";

//create connection
$conn = mysqli_connect($servername,$username,$password);

//check connection
if (!$conn) {
	die("connection faild" .mysqli_connect_error());
}
	echo "connection successfully";
?>