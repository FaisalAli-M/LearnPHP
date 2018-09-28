<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_db";

try {
	/* // For Query Statement
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode for exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = $conn->query("select * from bio");
	
	
	// $sql->setFetchMode(PDO::FETCH_ASSOC); we can also use object
		$sql->setFetchMode(PDO::FETCH_OBJ);
	
	while($row = $sql->fetch() )
	{
		// echo $row['email'] . "<br>";
		echo $row->email . "<br>";
	}
	*/
	
	// For Prepare Statement it is Best way because its same database usage and save sql injection
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode for exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = $conn->prepare("select * from bio");
	
	
	// $sql->setFetchMode(PDO::FETCH_ASSOC); we can also use object
		$sql->setFetchMode(PDO::FETCH_OBJ);
	
	$sql->execute();
	while($row = $sql->fetch() )
	{
		// echo $row['email'] . "<br>";
		echo $row->email . "<br>";
	}
	
}
catch(PDOException $e)
    {
		echo "<br>" . $e->getMessage();
    }
	

$conn = null;
?>