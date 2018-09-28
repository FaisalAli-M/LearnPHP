<!DOCTYPE html>
<html>
<body>

<?php
// Prepard and Bind

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

// Prepard
$str = $conn->prepare("insert into kiru(name , fName) values(?,?)");
//bind
$str->bind_param("ss", $Name , $FName);

//set Parameters and Excute this
$Name = "Aliyan";
$FName = "Ali";
$str->execute();

$Name = "Khurram";
$FName = "Nasir";
$str->execute();

$Name = "Adnan";
$FName = "Bhatti";
$str->execute();

echo "New Record Create Sucessfully";
$conn->close();

?>

</body>
</html>