<!DOCTYPE html>
<html>
<body>

<?php
// Limit Data 

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

// Limit Data

$que = "select * from kiru limit 5 OFFSET 6"; // here offset is Starting Point
$str = $conn->query($que);
if($str->num_rows > 0)
{
	while($row = $str->fetch_assoc())
	{
		echo "id is " . $row["id"] . " Name " . $row["name"] . " F.name is " . $row["fName"] . " Registeration date: " .$row["reg_date"];
		echo "<br>";
	}
}
else{
	echo "Record Not Found";
}

$conn->close();
?>

</body>
</html>