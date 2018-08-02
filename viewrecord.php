<!DOCTYPE html>
	<html>
	<head>
		
	</head>
	<h1>View Records</h1>
		<body>
			
		</body>
	</html>

<?php
			$conn = mysqli_connect('localhost','root','','demo');
               //echo "string"; exit();
                if(!$conn)
                {
                  die('Connection failed!'.mysqli_error($conn));
                }
            $result = mysqli_query($conn, "SELECT * FROM submitdatas");
            echo "<table border='1'>
            <tr>
	            <th>name</th>
				<th>email</th>
				<th>mobilenumber</th>
				<th>gender</th>
				<th>password</th>
				<th>address</th>
				<th>action</th>
			</tr>";
			while ($row = mysqli_fetch_array($result)) {
				# code...
				echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['mobilenumber'] ."</td>";
					echo "<td>" . $row['gender'] . "</td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo "<th><a href=\"register.php?id=$row[id]\">insert</a> | <a href=\"update.php?id=$row[id]\">update</a> | <a href=\"delete.php?id=$row[id]\">delete</a></th>";
					
				echo "</tr>";	
			}
			echo "</table>";
			mysqli_close($conn);
?>