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
		
		$sql = " select id , Name from students";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()){
					echo "id is " . $row["id"] . " Name is " . $row["Name"] . "<br>";
					
			}
		}
		else{
			echo "Not Found";
		}

?>
		
		