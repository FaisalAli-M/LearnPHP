<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

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
$id = $_POST['id'];
$name = $_POST['name'];
$fName = $_POST['fName'];
$Gender = $_POST['gender'];
$language = implode(",",$_POST['language']); // The implode function is used to "join elements of an array with a string". The implode() function returns a string from elements of an array. It takes an array of strings and joins them together into one string using a delimiter (string to be used between the pieces) of your choice. The implode function in PHP is easily remembered as "array to string", 
$Country = $_POST['country'];

$query = "update kiru2 set name='".$name."' , fName='".$fName."' , Gender='".$Gender."' , language='".$language."' , Country='".$Country."' where id='".$id."'";

if(!$conn->query($query))
{
	echo $conn->error;
};
header("location:P23 mySql(15)(1)Form.php")

?>