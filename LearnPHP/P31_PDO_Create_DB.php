<?php

$server = "localhost";
$user = "root";
$pass = "";

try{
	$conn = new PDO("mysql:host=$server;dbname=myDB",$user,$pass);
	
	// for Error PDO Error Mode Exception
	$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	
	$sql = "Create database PDO_DB";
	
	$conn->exec($sql);
	echo "DAtaBase Created Successfully";

}
catch(PDOException $e)
{
	echo $sql . " " . $e->getMessage();
}
$conn = null;
?>






