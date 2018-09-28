<!DOCTYPE html>
<html>
<body>
<h3> Insert Data In DataBase using Php and html Forms </h3>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "mydb";

$conn = new mysqli($server , $user , $pass , $db);
if($conn->connect_error)
{
	echo "Connection Failed " . $conn->error ;
}
else
{
	echo "Connection Sucessfully Connected "; 
}
$n = $_POST['naam'];
$f = $_POST['fnaam'];

$ins = "insert into kiru (name , fName) values ('$n' , '$f')";

if($conn->query($ins) === true)
{
	echo "Data Inserted";
}
else{
	echo "Something Wrong" . $conn->error;
}

?>


</body>
</html>