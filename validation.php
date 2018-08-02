
<!DOCTYPE html>
<html>
<head>
	<style>.error {color: #FF0000;}</style>
</head>
<body>

<?php
		// Initialize variables to null.
		$nameError ="";
		$emailError ="";
		$genderError ="";
		$websiteError ="";
		$name="";
		$email="";
		$website="";
		$comment="";
		$gender="";
		// On submitting form below function will execute.
		if(isset($_POST['submit']))
		{
		if (empty($_POST["name"]))
		{
			$nameError = "Name is required";
		} 
		else {
		$name = test_input($_POST["name"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name))
			{
				$nameError = "Only letters and white space allowed";
			}
		}

		if (empty($_POST["email"])) 
			{
			$emailError = "Email is required";
			} 
		else {
		$email = test_input($_POST["email"]);
		// check if e-mail address syntax is valid or not
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
			$emailError = "Invalid email format";
			}
		}

		if (empty($_POST["website"])) {
		$website = "";
		} 
		else {
		$website = test_input($_POST["website"]);
		// check address syntax is valid or not(this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
			{
			$websiteError = "Invalid URL";
			}
		}

		if (empty($_POST["comment"])) 
			{
			$comment = "";
			} 
		else {
		$comment = test_input($_POST["comment"]);
		}

		if (empty($_POST["gender"])) 
			{
			$genderError = "Gender is required";
			} 
		else {
			$gender = test_input($_POST["gender"]);
			}
		}


		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		
?>
<h2>Form Validation with PHP</h2>
	<p><span class="error">* required field</span></p>
		<form action="" method="post">
			Name:
				<input class="input" name="name" type="text" value="">
				<span class="error">* <?php echo $nameError;?></span><br><br>
			E-mail:
				<input class="input" name="email" type="text" value="">
				<span class="error">* <?php echo $emailError;?></span><br><br>
			Gender:
				<input class="radio" name="gender" type="radio" value="female">Female
				<input class="radio" name="gender" type="radio" value="male">Male
				<span class="error">*<?php echo $genderError;?></span><br><br>
			Website:
				<input class="input" name="website" type="text" value="">
				<span class="error"><?php echo $websiteError;?></span><br><br>
			Comment:
				<textarea cols="25" name="comment" rows="3">
				</textarea><br><br>

				<input  name="submit" type="submit" value="Submit">

		</form>
<?php
	echo "<h2>Your Input:-</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $gender;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
?>
	
</body>
</html>

