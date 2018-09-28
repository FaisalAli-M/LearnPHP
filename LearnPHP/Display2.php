<?php
		
		$name = $em = $gen = $web = "";
		$nameErr = $emErr = $genErr = $webErr = "";
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			if(empty($_POST['fname']))
			{
				$nameErr = "Name is Require";
			}
			else
			{
				$name = check($_POST['fname']);
				if(!preg_match("/^[a-zA-Z]*$/" , $name))
				{
					$nameErr = "Only Character and White Space Allowed";
				}
			}
			if(empty($_POST['email']))
			{
				$emErr = "Email is Require";
			}
			else
			{
				$em = check($_POST['email']);
				if(!filter_var($em , FILTER_VALIDATE_EMAIL))
				{
					$emErr = "Invalid Email Formate";
				}
			}
			if(empty($_POST['website']))
			{
				$webErr = "";
			}
			else
			{
				$web = check($_POST['website']);
				if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				$webErr = "Invalid URL"; 
    }    
			}
			if(empty($_POST['gender']))
			{
				$genErr = "Gender is Require";
			}
			else
			{
				$gen = check($_POST['gender']);
			}
		}
		
		// create function for security
		function check($data)
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data ;
		}
		
		echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $em;
echo "<br>";
echo $web;
echo "<br>";
echo $gen;
	?>