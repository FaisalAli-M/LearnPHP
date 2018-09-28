<!DOCTYPE html>
<html>
<body>

<?php
// Create Database

// Create Connection
$server = "localhost";
$user = "root";
$pass = "";

// Object oriented Method
$conn = new mysqli($server , $user , $pass);

if($conn->connect_error)
{
	die ("Connection Failed " . $conn->connect_error);
}
else{
	echo "Connection connected Sucessfully";
}


$db = "CREATE DATABASE mydb";

if($conn->query($db) === true)
{
	echo "database Sucessfully Create";
}
else{
	echo "Something went Wrong " .$conn->error;
}
$conn->close();

// Procedural Method

/*$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
*/

?>

</body>
</html>