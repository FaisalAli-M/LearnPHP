<!DOCTYPE html>
<html>
<body>

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

$ins = "select * from kiru where id='" . $n . "'";

$res = $conn->query($ins);

if($res->num_rows > 0)
{

	// output row data use loop to fetch all rows beacuse without use loop only 1st row will display
	while($row = $res->fetch_assoc()) // it store only Aplabets
	{
	echo "<br>";
	echo "Id: " . $row['id'] . "<br>";
	echo "Name: " . $row['name'] . "<br>";
	echo "F-Name: " . $row['fName'] . "<br>";
	echo "Reg-Date: " . $row['reg_date'] . "<br><br>";
	}
	
}
else {
		echo "Data not Found";
	}

$conn->close();

?>


</body>
</html>