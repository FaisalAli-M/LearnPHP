<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $st =  $conn->prepare("insert into bio (firstname , email) Values (:firstname , :email)");
	$st->bindParam(':firstname' , $firstname);
	$st->bindParam(':email' , $email);
	
	//insert
	$firstname = "Aliyan";
	$email = "aliyan@gmail.com";
	$st->execute();
	
	$firstname = "Uzair";
	$email = "Uzair@gmail.com";
	$st->execute();
	
	$firstname = "Ahsan";
	$email = "Ashan@gmail.com";
	$st->execute();
}
	
catch(PDOException $e)
    {
		echo "<br>" . $e->getMessage();
    }

$conn = null;
?>