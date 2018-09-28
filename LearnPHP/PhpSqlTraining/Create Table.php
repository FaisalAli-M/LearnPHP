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
		
		//Create Table using Object Oriented
		
		$table = "Create table Students (
		id int(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
		Name varchar(40) NOT NULL,
		Roll_No int(10) NOT NULL
		)";
		if($conn->query($table) === true){
			echo "Table Create Sucessfully";
			
		}
		else{
			echo "Something Went wrong" . $conn->error;
		}
	
		// Create Table Using Procedural Method
		
		$table2 = " create table Students2 (
		id int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY , 
		Name varchar(20) NOT NULL,
		Result varchar(20) NOT NULL
		)";
		if(mysqli_query($conn, $table2))
		{
			echo "Table 2 Create Sucessfully";
		}
		else{
			echo "table 2 not Create" . mysqli_error($conn);
		}
			$conn->close();
		// mysqli_close($conn);
		


?>