<?php


$server = "localhost";
$user = "root";
$pass = "";
$db_name = "pdo_db";

try{
$conn = new PDO("mysql:host=$server;dbname=$db_name",$user,$pass);

$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

$sql = "CREATE TABLE bio (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
$conn->exec($sql);
echo "Table CREATE Successfully";
}
catch(PDOException $e)
{
	echo $sql . "<br>" . $e->getMessage();
}

?>