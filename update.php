 <?php
		$con = mysqli_connect('localhost','root','','demo');
		$id=$_REQUEST['id'];
		$query = "SELECT * from submitdatas where id='".$id."'"; 
		$result = mysqli_query($con, $query) or die ( mysqli_error());
		$row  = mysqli_fetch_assoc($result);

if(isset($_POST['new']) && $_POST['new']==1)
	{
		$id=$_REQUEST['id'];
		$name =$_REQUEST['name'];
		$email =$_REQUEST['email'];
		$mobilenumber =$_REQUEST['mobilenumber'];
		$password =$_REQUEST['password'];
		$address =$_REQUEST['address'];


		$update= "UPDATE submitdatas SET name='$name', email='$email', mobilenumber='$mobilenumber', password='$password', address='$address' WHERE id=$id";
		//print($update); exit();
		mysqli_query($con, $update)or die ( mysqli_error());;
		header("Location: viewrecord.php");
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<h1> Update details</h1>
	</head>
<body>
	<form name="form" method="post" action=""> 
		<input type="hidden" name="new" value="1" />
		<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
		Name:-<input type="text" name="name"  required value="<?php echo $row['name'];?>" /><br>
		E-mail:-<input type="text" name="email"  required value="<?php echo $row['email'];?>" /><br>
		Mobilenumber:-<input type="text" name="mobilenumber"  required value="<?php echo $row['mobilenumber'];?>" /><br>
		Password:-<input type="text" name="password" required value="<?php echo $row['password'];?>" /><br>
		Address:-<input type="text" name="address" required value="<?php echo $row['address'];?>" /><br>
		<input name="submit" type="submit" value="save" />
	</form>
</body>
</html>


