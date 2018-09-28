<?php

$servername = "localhost";
$user = "root";
$password = "";
 
 // Object Oriented Method
/* $conn = new mysqli($servername , $user , $password);
	if($conn->connect_error){
	 die ("Connection lost " . $conn->connect_error);
	}
	else{
		echo "Connection Sucessfully";
	} */

//	Procedural

	$conn = mysqli_connect($servername , $user , $password);
		if(!$conn){
			die ("Connection Ended" .mysqli_connect_error());
		}
		else{
			echo "Conection Sucessfully";
		}
		
// Create DB using Object Oriented

	$db = "Create database school";
	if($conn->query($db)=== true){
		echo "DataBase Create Sucessfully";
	}
	else{
		echo "something wrong" . $conn->error;
	}
	$conn->close();
	
	// Create DataBase Using Procedural Method
/*$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
*/



?>