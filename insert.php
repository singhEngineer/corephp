<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
		<body>
			<form method="post" >
				Sno:-<input type="text" name="sno"  required value="" /><br>
				Name:-<input type="text" name="name"  required value="" /><br>
				Username:-<input type="text" name="username"  required value=""/><br>
				Password:-<input type="text" name="password" required value="" /><br>
				<input name="submit" type="submit" value="INSERT" />
			</form>
		</body>
</html>

<?php

			$conn = mysqli_connect('localhost','root','','demo');
				//echo "string"; exit();

			if(!$conn)
			 {
				die('Connection failed!'.mysqli_error($conn));
			 	}//echo "string"; exit();

			if(isset($_POST['submit'])){
				//echo "string";exit();
				$sno = $_POST['sno'];
				$name = $_POST['name'];
				$username = $_POST['username'];
				$password = $_POST['password'];

				$sql = "INSERT INTO registrations (sno, name, username, password) VALUES('$sno', '$name',
				'$username','$password')";
				//echo $sql; exit();

				//if($conn->query($sql) === TRUE)
				 if(mysqli_query($conn,$sql))
				{
					echo "Registerd Successfully";
				}
				else
				{
					echo "nots";
				}
			}
			mysqli_close($conn);	
?>

