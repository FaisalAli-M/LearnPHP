<!DOCTYPE html>
<html>
<body>

<?php
// Select Data From Table

// Create Connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "mydb";

// Object oriented Method
$conn = new mysqli($server , $user , $pass , $db);

if($conn->connect_error)
{
	die ("Connection Failed " . $conn->connect_error);
}
else{
	echo "Connection connected Sucessfully";
	echo "<br>";
}

// Select data
// Select data to convert all Data into Array because data has int , string , double so Array is the best option Beacause array can save all data type and display it without error

$selet = "select * from kiru"; // here you can write the name of specific coloum or id and...
$res = $conn->query($selet);

if($res->num_rows > 0)
{
	echo "<table border='1'>";
	echo "<tr>";
		echo "<td> Id </td>";
		echo "<td> Name </td>";
		echo "<td> F-Name </td>";
		echo "<td> Reg-Date </td>";
	echo "</tr>";
	// output row data use loop to fetch all rows beacuse without use loop only 1st row will display
	while($row = $res->fetch_assoc())
	{
		
		echo "<tr>";
			echo " <td>" . $row['id'] . "</td>";
			echo " <td>" . $row['name'] . "</td>";
			echo " <td>" . $row['fName'] . "</td>";
			echo " <td>" . $row['reg_date'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
}
else {
		echo "Data not Found";
	}
	
$conn->close();
?>

</body>
</html>