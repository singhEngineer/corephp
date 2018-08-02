
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
      <body>
            <h1> JOIN QUERY / LEFT / RIGHT / INNER / UNION</h1>
      </body>
</html>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'demo');

// echo "string"; exit();

if (!$conn)
   {
   die('Connection failed!' . mysqli_error($conn));
   }

// echo "string"; exit();

//$sql = 'SELECT  santosh.name, santosh.email, submitdatas.mobilenumber,submitdatas.address FROM santosh INNER JOIN submitdatas ON santosh.id=submitdatas.id';

//$sql = 'SELECT  santosh.name, santosh.email, submitdatas.mobilenumber,submitdatas.address FROM santosh LEFT JOIN submitdatas ON santosh.id=submitdatas.id';

//$sql = 'SELECT  santosh.name, santosh.email, submitdatas.mobilenumber,submitdatas.address FROM santosh RIGHT JOIN submitdatas ON santosh.id=submitdatas.id';

$sql = 'SELECT * FROM santosh LEFT JOIN submitdatas ON santosh.id = submitdatas.id UNION SELECT * FROM santosh
RIGHT JOIN submitdatas ON santosh.id = submitdatas.id';

if ($result = mysqli_query($conn, $sql))
   {
   if (mysqli_num_rows($result) > 0)
      {
      echo "<table border=2>";
         echo "<tr>";
            echo "<th>name</th>";
            echo "<th>email</th>";
            echo "<th>mobilenumber</th>";
            echo "<th>address</th>";
            //
            echo "<th>phone</th>";
            echo "<th>work exp</th>";
            echo "<th>destination</th>";
            echo "<th>name</th>";
            echo "<th>email</th>";
            echo "<th>gender</th>";
            echo "<th>password</th>";
            echo "<th>address</th>";
         echo "</tr>";
      while ($row = mysqli_fetch_array($result))
         {
         echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobilenumber'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            //
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['work exp'] . "</td>";
            echo "<td>" . $row['destination'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
         echo "</tr>";
         }

      echo "</table>";
      mysqli_free_result($result);
      }
     else
      {
         echo "No records matching your query were found.";
      }
   }
  else
   {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }

mysqli_close($conn);
?>