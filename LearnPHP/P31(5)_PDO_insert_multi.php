<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$conn->beginTransaction();
 
	
    // use exec() because no results are returned
    $conn->exec("INSERT INTO bio (firstname,  email)
    VALUES ('Danish', 'danish@example.com')");
	
	    $conn->exec("INSERT INTO bio (firstname,  email)
    VALUES ('Mehmood', 'Mehmood@example.com')");
	
	    $conn->exec("INSERT INTO bio (firstname,  email)
    VALUES ('Azhar', 'Azhar@example.com')");
	
	
	$conn->commit();
	
	
    echo "New record created successfully" . "<br>";
  
    }
catch(PDOException $e)
    {
		$conn->rollback();
    echo  "<br>" . $e->getMessage();
    }

$conn = null;
?>