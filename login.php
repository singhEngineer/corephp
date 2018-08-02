	

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
			$conn = mysqli_connect('localhost','root','','demo');
               //echo "string"; exit();
                if(!$conn)
                {
                  die('Connection failed!'.mysqli_error($conn));
                }


session_start();
	

	if (isset($_POST['Login']))
	{
		$email = $_REQUEST['email'];
		//print_r($email); exit();
		$email = mysqli_real_escape_string($conn,$email);

		$password = $_REQUEST['password'];
		$password = mysqli_real_escape_string($conn,$password);

		//Checking is user existing in the database or not
	        $query = "SELECT * FROM submitdatas WHERE email='$email'
				and password='$password'";
				//print_r($query); exit();
			$result = mysqli_query($conn,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);

	        if($rows==1)
	        {
			    $_SESSION['email'] = $email;
				    // {
				    // 	echo "<h1>LogIn successfull ".$_SESSION['email']."</h1>";
				    // }
			    header("Location: session.php");
	         }

	         else{
				echo "<div class='form'>
					<h3>E-mail/password is incorrect.</h3>
					<br/>Click here to <a href='login.php'>Login</a></div>";
			}
	    }
	    else{
	?>
		<div class="form">
			<h1>LogIn Form</h1>
					<form action="" method="post" name="login">
					<input type="text" name="email" placeholder="E-mail" required /><br><br>
					<input type="password" name="password" placeholder="Password" required /><br><br>
					<input name="Login" type="submit" value="Login" /><br>
					</form>
				<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		</div>
	<?php } ?>

</body>
</html>