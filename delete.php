<?php
$con = mysqli_connect('localhost','root','','demo');
$id=$_REQUEST['id'];
$delete = "DELETE FROM submitdatas WHERE id=$id"; 
$result1 = mysqli_query($con,$delete) or die ( mysqli_error());
header("Location: viewrecord.php"); 
?>