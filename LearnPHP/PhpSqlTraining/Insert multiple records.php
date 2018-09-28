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
		
		//Insert Data into Table using Object Oriented
		$data = "insert into students (Name,Roll_No) values ('Azhar','003');";
		$data .= "insert into students (Name,Roll_No) values ('Mehmood','004');";
		$data .= "insert into students (Name,Roll_No) values ('Waleed','005');";
		if($conn->multi_query($data)=== true)
		{
			echo "Multiple data has been Inserted" ;
		}
		else{
			echo "Data not inserted " . $conn->error;
		}
		
		//Insert Data into Table using Procedural
		 /* $data2 = "insert into students2 (Name,Result) values ('Danish','Passed');";
		 $data2 .= "insert into students2 (Name,Result) values ('Mehmood','Passed');";
		 $data2 .= "insert into students2 (Name,Result) values ('Azhar','failed');";
		if(mysqli_multi_query($conn , $data2))
		{
			echo "Multiple data has been inserted into Table2";
		}
		else{
			echo "Data not inserted into Table2" . mysqli_error($conn);
		} */
		
	$conn->close();

?>