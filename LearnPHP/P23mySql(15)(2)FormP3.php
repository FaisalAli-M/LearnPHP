<?php


$host = "localhost";
$user = "root";
$pass = "";
$db = "mydb";

$conn = new mysqli($host , $user , $pass , $db);
if($conn->connect_error)
{
	echo $conn->error;
}
else
{
	echo "Connection Sucessfully <br> <br>";
}
$id = $_POST['id'];
$name = $_POST['name'];
$fName = $_POST['fName'];
$Gender = $_POST['gender'];
$language = implode(",",$_POST['language']); 
$Country = $_POST['Country'];

$query = "update kiru2 set name='".$name."' , fName='".$fName."' , Gender='".$Gender."' , language='".$language."' , Country='".$Country."' where id='".$id."'";

if(!$conn->query($query))
{
	echo $conn->error;
};
header("location:P23 mySql(15)(2)Form.php")
?>