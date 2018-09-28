<!DOCTYPE html>
<html>
<body>

<?php
// Insert Muliple Records in Table

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

// Insert Multiple Data
$ins = "insert into kiru(name,fName) values ('Uzair' , 'Rehman');";
$ins .= "insert into kiru(name,fName) values ('Shahrukh' , 'dash');";
$ins .= "insert into kiru(name,fName) values ('Waleed' , 'Kareem');";
if($conn->multi_query($ins) === true)
{
	echo " Multiple Data Inserted Sucessfully ";
}
else{
	echo "Data Not Insert " . $conn-error;
}
$conn->close();

?>

</body>
</html>