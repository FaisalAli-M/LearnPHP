<!DOCTYPE html>
<html>
<body>

<?php
// Delete Data From Table

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

// Delete Data

$que = "delete from kiru where id=11";
if($conn->query($que) === true)
{
	echo " Record Has been deleted ";
}
else{
	echo "Something wrong" . $conn->error;
}
$conn->close();
?>

</body>
</html>