<!DOCTYPE html>
<html >
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<h1> Registration Form</h1>
  	<body>
    <form method="post" >
    	<div class="container">
    		<form class="form-horizantal">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          			<div class="form-group">
          				 Name:-<input type="text" placeholder="Name" name="name">
          			</div>
            </div>  
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          			<div class="form-group">
            			E-mail:-<input type="text" placeholder="E-mail" name="email">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          			<div class="form-group">
                   Mobile Number:-<input type="text" placeholder="Mobile" name="mobilenumber">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          			<div class="form-group">
                   Gender:Male<input type="radio" name="gender" value="Male" >
                          Female<input type="radio" name="gender" value="Female" > 
                          Other<input type="radio" name="gender" value="Other" >
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          			<div class="form-group">
                  Password:-<input type="Password" placeholder="Password" name="password">	
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          			<div class="form-group">
                  Address:-<textarea placeholder="Address" name="address"></textarea>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
          			  <input type="submit" name="submit" value="submit">

                </div>
            </div>
    		</form>
    	</div>
      </form>	
            <p>Already a member? <a href="login.php">Sign in Here</a></p>
  </body>
</html>

<?php

               $conn = mysqli_connect('localhost','root','','demo');
               //echo "string"; exit();
                if(!$conn)
                {
                  die('Connection failed!'.mysqli_error($conn));
                }
                //echo "string"; exit();
                if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobilenumber = $_POST['mobilenumber'];
                $gender = $_POST['gender'];
                $password = $_POST['password'];
                $address = $_POST['address'];

                $sql = "INSERT INTO submitdatas (name, email, mobilenumber, gender, password, address) VALUES ('$name', '$email', '$mobilenumber', '$gender', '$password', '$address')";

                 if(mysqli_query($conn,$sql))
                      {
                        echo "Registerd Successfully";
                      }
                      else
                      {
                        echo "nots";
                      }
                      header("Location: login.php");
                }
                 mysqli_close($conn);  
?>