<!DOCTYPE html>
<html>
<head>
	<title>Emaill</title>
</head>
<body>

<form action="emailsending.php" method="post">


ID <input type="text" name="i" placeholder="ID">
<br>

Email <input type="text" name="e" placeholder="Enter Mail">
<br>

Passowrd <input type="text" name="p" placeholder="Enter Password">
<br>

Subject <input type="text" name="s" placeholder="Enter Subject">
<br>

Body <input type="text" name="b" placeholder="Enter Message">

<br>

<input type="submit" name="btn">



</form>

<?php
include ("Mail.php");
//geting values

$to = $_POST['i'];
$from = $_POST['e'];
$pass = $_POST['p'];
$sub = $_POST['s'];
$msg = $_POST['b'];


//host and ports

$host = "smtp.gmail.com";
$port = "587";


//header creation

$header = array("From"=>$from, "To"=>$to , "Subject"=>$sub );


//creating smtp


$smtp =Mail::factory('smtp', array('host'=>$host, 'auth'=>true, 'port'=>$port,'username'=>$from, 'password'=>$pass));


//sending mail

$mail=$smtp-> send($to,$header,$msg);
if(PEAR::isError($mail))
	{
		echo $mail->getMessage();
	}
	else
	{
		echo "mail sent successfully";
	}




//download file "mail.php"




?>

</body>
</html>
