<!DOCTYPE html>
<html>
<body>

<?php
// Update Data 

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

$que = "update kiru set name='Altaf' , fName='Khan' where id=12";
if($conn->query($que) === true)
{
	echo " Record Has been Updated ";
}
else{
	echo "Something wrong" . $conn->error;
}
$conn->close();
?>

</body>
</html>