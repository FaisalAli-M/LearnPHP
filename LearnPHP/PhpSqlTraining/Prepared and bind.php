<?php

$servername = "localhost";
$user = "root";
$password = "";
 
 // Object Oriented Method
$conn = new mysqli($servername , $user , $password);
	if($conn->connect_error){
	 die ("Connection lost " . $conn->connect_error);
	}
	else{
		echo "Connection Sucessfully";
	} 

//	Procedural
/*
	$conn = mysqli_connect($servername , $user , $password);
		if(!$conn){
			die ("Connection Ended" .mysqli_connect_error());
		}
		else{
			echo "Conection Sucessfully";
		}
		*/
		
// Prepared and bind using Object Oriented Method;

$pre = $conn->prepare("insert into students2 (Name,Result) values (?,?)");
$pre->bind_param("ss", $FName, $Re);

// set parameters and excute
$FName = "Student1";
$Re = "Passed";
$pre->execute();

$FName = "Student2";
$Re = "Passed";
$pre->execute();

$FName = "Student3";
$Re = "Passed";
$pre->execute();

echo "News records has been Added";

$pre->close();
$conn->close();

?>