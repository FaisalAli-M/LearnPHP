<!DOCTYPE html>
<html>
<body>

<?php
// Create Table

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

// Create Table

$tabl = "CREATE TABLE kiru (
id int(10) PRIMARY KEY AUTO_INCREMENT,
name varchar(20) NOT NULL,
fName varchar(20) NOT NULL,
reg_date TIMESTAMP
)";
if($conn->query($tabl) === true)
{
	echo " Table Create Sucessfully ";
}
else{
	echo " Table not Created " . $conn->error;
}

$conn->close();

?>

</body>
</html>