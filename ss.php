
<?php
$conn = mysqli_connect('localhost', 'root', '', 'demo');

// echo "string"; exit();

if (!$conn)
	{
	die('Connection failed!' . mysqli_error($conn));
	}

// echo "string"; exit();
// $servername="localhost";
// $username="root";
// $password="";
// $db = "demo";
// //create connection
// $conn = mysqli_connect($servername,$username,$password,$db);
// //check connection
// if (!$conn) {
// 	die("connection faild" .mysqli_connect_error());
// }
// 	//echo "connection successfully";

$sql = 'SELECT  santosh.name, santosh.email, submitdatas.mobilenumber FROM santosh INNER JOIN submitdatas 
 		ON santosh.id=submitdatas.id';
mysqli_select_db('demo');
$result = mysqli_query($sql, $conn);

if (!$result)
	{
	die('Could not get data: ' . mysqli_error());
	}

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	echo "name:{$row['santosh_name']}  <br /> " .
	 	 "email: {$row['santosh_email']} <br /> " . 
		 "mobilenumber : {$row['submitdatas_mobilenumber']} <br /> " .
		  "--------------------------------<br />";
	}

echo "Fetched data successfully\n";
mysqli_cose($conn);
?>
