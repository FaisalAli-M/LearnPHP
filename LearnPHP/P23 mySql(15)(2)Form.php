<!DOCTYPE html>
<html>
<body>
<h3>Update using Query String and Get Method </h3>


<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "mydb";

$conn = new mysqli($server , $user , $pass , $db);
if($conn->connect_error)
{
	echo "Connection Failed " . $conn->error ;
}
else
{
	echo "Connection Sucessfully Connected "; 
}


// SELECT ALL REmaining Data
$selet = "select * from kiru2"; // here you can write the name of specific coloum or id and...
$res = $conn->query($selet);

if($res->num_rows > 0)
{
	echo "<form method='post'>";
	echo "<table border='1'>";
	echo "<tr>";
		echo "<td> Id </td>";
		echo "<td> Name </td>";
		echo "<td> F-Name </td>";
		echo "<td> Gender </td>";
		echo "<td> Language </td>";
		echo "<td> Country </td>";
		echo "<td> Edit </td>";
		
	echo "</tr>";
	// output row data use loop to fetch all rows beacuse without use loop only 1st row will display
	while($row = $res->fetch_assoc())
	{
		
		echo "<tr>";
			echo " <td>" . $row['id'] . "</td>";
			echo " <td>" . $row['name'] . "</td>";
			echo " <td>" . $row['fName'] . "</td>";
			echo " <td>" . $row['Gender'] . "</td>";
			echo " <td>" . $row['language'] . "</td>";
			echo " <td>" . $row['Country'] . "</td>";
			echo "<td> <a href='P23mySql(15)(2)FormP2.php?id=".$row["id"]."'> Edit </a>  </td>";
		
	}

	
}
else {
		echo "Data not Found";
	}

?>




</body>
</html>