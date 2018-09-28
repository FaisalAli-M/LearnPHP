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
		





?>