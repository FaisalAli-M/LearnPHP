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
}

// Select data
// Select data to convert all Data into Array because data has int , string , double so Array is the best option Beacause array can save all data type and display it without error

$selet = "select * from kiru"; // here you can write the name of specific coloum or id and...
$res = $conn->query($selet);

if($res->num_rows > 0)
{
	// output row data use loop to fetch all rows beacuse without use loop only 1st row will display
	while($row = $res->fetch_assoc())
	{
		echo "id is " . $row["id"] . " Name " . $row["name"] . " F.name is " . $row["fName"] . " Registeration date: " .$row["reg_date"];
		echo "<br>";
	}
	
}
else {
		echo "Data not Found";
	}
$conn->close();
?>

</body>
</html>