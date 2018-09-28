<!DOCTYPE html>
<html lang="en">

<title> Registeration Form </title>
<head>
	<style>
	body {background:grey}
		.form {width:800px ; height:500px ; background:white ; margin:0 auto ; font-size:24px ; padding:20px}
	input {
		width:220px;
		height:30px;
		font-size:18px;
		
		display:block
	}
	lable{
		font-size:bold
		
	}

	</style>
</head>
<body>

<div class="form">
<form method="post" action="form.php">
	<lable> User Name: </lable><br>
	<input type="text" name="name" placeholder="Enter User Name" required><br>
	<lable> User Email: </lable><br>
	<input type="text" name="email" placeholder="Enter User Email" required><br>
	<lable> User Password: </lable><br>
	<input type="text" name="pass" placeholder="Enter User Password" required><br>
	<input type="submit" name="submit" value="Submit">
</form>	
</div>
</body>
</html>


<?php
include("process.php");
$db = new db();

if(isset($_POST['submit']))
{
	$username = $_POST['name'];
	$useremail = $_POST['email'];
	$userpass = $_POST['pass'];
	
	$query = "insert into user (user_name,user_email,user_pass) values ('$username','$useremail','$userpass')";
	$db->insert($query);
}
?>