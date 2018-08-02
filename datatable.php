
<?php
	$conn = mysqli_connect('localhost','root','','demo');
       //echo "string"; exit();
        if(!$conn)
        {
          die('Connection failed!'.mysqli_error($conn));
        }

    $result = mysqli_query($conn, "SELECT * FROM submitdatas");
    //$result = mysqli_query($conn,$sql);
    $data = array();

?>		
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<h1>Data Table</h1>
<body>
<table id="example" class="display" style="width:100%">

            <tr>
	            <th>name</th>
				<th>email</th>
				<th>mobilenumber</th>
				<th>gender</th>
				<th>password</th>
				<th>address</th>
				<th>action</th>
			</tr>
	
<?php
			while ($row = mysqli_fetch_array($result)) {
				# code...
				echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['mobilenumber'] ."</td>";
					echo "<td>" . $row['gender'] . "</td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo "<th><a href=\"register.php?id=$row[id]\">insert</a> | <a href=\"edit.php?id=$row[id]\">update</a> | <a href=\"delete.php?id=$row[id]\">delete</a></th>";
				echo "</tr>";	
			}
			echo "</table>";
			//mysqli_close($conn);
?>
	</body>
</html>
	<script type="text/javascript">
		$(document).ready(function() {
			 $('#example').DataTable( {
			 	"processing": true,
		        "serverSide": true,
		        "ajax": "../server_side/scripts/server_processing.php"
		} );
		} );
	</script>
