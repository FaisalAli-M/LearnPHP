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
	// $res->fetch_array() Method Take Alphabetic Index or Number Index both to Display Records but it is not good for use beacuse it take lots of Memory 
	//Only First row will display if you want to Display more row so write this code again n again or you can also use loops for Display all Rows
	$row = $res->fetch_array(MYSQL_NUM); // it store only num
	echo "Row 1 <br>";
	echo "Id: " . $row['0'] . "<br>";
	echo "Name: " . $row['1'] . "<br>";
	echo "F-Name: " . $row['2'] . "<br>";
	echo "Reg-Date: " . $row['3'] . "<br><br>";
	
	$row = $res->fetch_array(MYSQL_ASSOC); // it store only Aplabets
	echo "Row 2 <br>";
	echo "Id: " . $row['id'] . "<br>";
	echo "Name: " . $row['name'] . "<br>";
	echo "F-Name: " . $row['fName'] . "<br>";
	echo "Reg-Date: " . $row['reg_date'] . "<br><br>";
	
	$row = $res->fetch_array(MYSQL_BOTH); // it store Both
	echo "Row 2 <br>";
	echo "Id: " . $row['id'] . "<br>";
	echo "Name: " . $row['1'] . "<br>";
	echo "F-Name: " . $row['fName'] . "<br>";
	echo "Reg-Date: " . $row['3'] . "<br><br>";
	//Only use fetch_row and fetch_assoc not use fetch_array because it is bad
}
else {
		echo "Data not Found";
	}
$conn->close();
?>

</body>
</html>