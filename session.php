
<?php
session_start();
echo " Hello mr." . $_SESSION['email'];
echo "<br />U have the successfully learn the concept of Session";
$inactive = 60;

// check to see if $_SESSION["timeout"] is set

if (isset($_SESSION["timeout"]))
	{

	// calculate the session's "time to live"

	$sessionTTL = time() - $_SESSION["timeout"];
	if ($sessionTTL > $inactive)
		{
		session_destroy();

		// header("Location: session.php");

		}
	}

$_SESSION["timeout"] = time();
?>