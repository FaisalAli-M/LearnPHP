<!DOCTYPE html>
<html>
<body>

<?php
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
$conn->close();

// MySQLi Procedural method
/*
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/

?>

</body>
</html>