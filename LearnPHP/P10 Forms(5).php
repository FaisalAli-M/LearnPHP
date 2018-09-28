<!DOCTYPE html>
<html>
<head>
	<style>
		.col {color:red}
	</style>
</head>
<body>
	

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
		
	?>
	
	<h2> Send Data With Validation and Security with Require and also check correct name , email , url formate</h2>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>"> <!-- if we want to send value in other page so in action write file name -->
		Name: <input type="text" name="fname" ><span class="col">* <?php echo $nameErr;?></span> <br>
		Email: <input type="text" name="email" > <span class="col"> * <?php echo $emErr ;?> </span><br>
		Website: <input type="text" name="website" > <span class="col"> * <?php echo $webErr ;?> </span><br>
		Male: <input type="radio" name="gender" value="Male"> 
		FeMale: <input type="radio" name="gender" value="FeMale"> <span class="col"> * <?php echo $genErr ;?> </span><br>
		<input type="submit" > 
	<br>
	</form>
	<br>
	
	<?php
	echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $em;
echo "<br>";
echo $web;
echo "<br>";
echo $gen;
	?>

 
</body>
</html>