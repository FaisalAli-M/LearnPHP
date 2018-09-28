<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO bio (firstname,  email)
    VALUES ('Faisal', 'faisal@example.com')";
	
    // use exec() because no results are returned
    $conn->exec($sql);
	$id = $conn->lastInsertId();
	
	
    echo "New record created successfully" . "<br>";
    echo "Last ID is " . $id;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>