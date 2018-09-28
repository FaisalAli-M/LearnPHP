<?php
$na = $_POST['name'];
$em = $_POST['email'];
$pa = $_POST['pass'];

$conn = new mysqli("localhost","root","","mydb");
if($conn->connect_error)
{
	echo "Error: " . $conn-error;
}
else
{
	
}
$sql = "select * from registration where Email='$em'" ;
$result = $conn->query($sql);

if($result->num_rows > 0 ) {
	echo "This Email Already Exits Try Another One";
}
else{
	$sql2 = "insert into registration (Name,Email,Password) values('$na' , '$em' , '$pa')";
	if($conn->query($sql2) === true)
	{
		echo "Registration Sucessfully";
	}
	else{
		echo $conn->error;
	}
}

?>