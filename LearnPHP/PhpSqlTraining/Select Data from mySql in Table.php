<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>


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
		$sql = "select * from students2";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			echo "<table> <tr> <th> Id </th> <th> Name </th> <th> Result </th> </tr> ";
			while($row = $result->fetch_assoc())
			{
				
				echo "<tr> <td>" . $row["id"] . "</td> <td>" . $row["Name"] . "</td> <td>" . $row["Result"] . "</td> </tr>";
				
			}
			echo "</table>";
		}
		else{
			echo "Not Found";
		}

?>
		
		</body>
		</html>