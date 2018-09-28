<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "school";
 
 // Object Oriented Method
 $conn = new mysqli($servername , $user , $password ,  $dbname);
	if($conn->connect_error){
	 die ("Connection lost " . $conn->connect_error);
	}
	else{
		echo "Connection Sucessfully";
	} 

//	Procedural

/*	$conn = mysqli_connect($servername , $user , $password , $dbname);
		if(!$conn){
			die ("Connection Ended" .mysqli_connect_error());
		}
		else{
			echo "Conection Sucessfully";
		}
		*/
		
		$upda = "update students set Name='Danish' where Roll_No=3";
		
		if($conn->query($upda) === true)
		{
			echo "Updated Sucessfully";
		}
		else{
			echo " Something wrong " . $conn->error;
		}
?>
		
		