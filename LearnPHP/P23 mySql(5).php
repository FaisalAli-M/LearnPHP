<!DOCTYPE html>
<html>
<body>

<?php
// Insert Data into Table and Get Last Inserted Id

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

// Insert Data
$ins = "insert into kiru(name,fName) values ('Mehmood' , 'Raseed')";
if($conn->query($ins) === true)
{
	$last_id = $conn->insert_id;
	echo "Last Inseted Id is " . $last_id;
	echo " Data Inserted Sucessfully ";
}
else{
	echo "Data Not Insert " . $conn-error;
}
$conn->close();

?>

</body>
</html>