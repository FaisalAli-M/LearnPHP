<!DOCTYPE html>
<html>
<head>
<title> > PHP Insert Data Into DataBase </title>
</head>
<body>
<table border="2" action="Connections.php" method="post"> 
<tr>
<td><p> Enter Student iD:</p> </td>
<td><input type="text" name="id" <td> 
</tr>


<tr>
<td><p> Enter Student Name:</p> </td>
<td><input type="text" name="name" <td> 
</tr>


<tr>
<td><p> Enter Student Father Name:</p> </td>
<td><input type="text" name="fname" <td> 
</tr>


<tr>
<td><p> Enter Student Roll no:</p> </td>
<td><input type="text" name="roll" <td> 
</tr>


<tr>
<td><p> Enter Student Result:</p> </td>
<td><input type="text" name="result" <td> 
</tr>

<tr> <td colspan="3" align="center"> <input type="Submit" value="Submit Now" name="submit" </td> </tr>

</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="learnphp";

// Create connection
$conn = new mysqli($servername, $username, $password , $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


// Inser Data into Database
/*
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$roll_no = $_POST['roll'];
	$result = $_POST['result'];
*/
	$sql = "INSERT INTO learndb (Id,Name,FName,Roll_no,Result) values ('01','Faisal','liaquat','930288','Pass')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();



?>
