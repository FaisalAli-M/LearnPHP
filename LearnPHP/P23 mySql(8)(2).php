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
	echo "Connection connected Sucessfully" . "<br>";
}

// Select data
// Select data to convert all Data into Array because data has int , string , double so Array is the best option Beacause array can save all data type and display it without error
$selet = "select * from kiru"; // here you can write the name of specific coloum or id and...
$res = $conn->query($selet);

if($res->num_rows > 0)
{
	// output row data
	// $res->fetch_row() Method Take Number Index to Display Records
	//Only First row will display if you want to Display more row so write this code again n again or you can also use loops for Display all Rows
	$row = $res->fetch_row();
	echo "Row 1 <br>";
	echo "Id: " . $row[0] . "<br>";
	echo "Name: " . $row[1] . "<br>";
	echo "F-Name: " . $row[2] . "<br>";
	echo "Reg-Date: " . $row[3] . "<br><br>";
	
	$row = $res->fetch_row();
	echo "Row 2 <br>";
	echo "Id: " . $row[0] . "<br>";
	echo "Name: " . $row[1] . "<br>";
	echo "F-Name: " . $row[2] . "<br>";
	echo "Reg-Date: " . $row[3] . "<br><br>";
	
	$row = $res->fetch_row();
	echo "Row 3 <br>";
	echo "Id: " . $row[0] . "<br>";
	echo "Name: " . $row[1] . "<br>";
	echo "F-Name: " . $row[2] . "<br>";
	echo "Reg-Date: " . $row[3] . "<br><br>";
	
}
else {
		echo "Data not Found";
	}
$conn->close();
?>

</body>
</html>