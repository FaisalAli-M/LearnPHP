<!DOCTYPE html>
<html>
<body>
	<h2> Send Data With Validation and Security without Require</h2>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"> <!-- if we want to send value in other page so in action write file name -->
		Name: <input type="text" name="fname" >
		Name: <input type="text" name="email" >
		Male: <input type="radio" name="gender" value="Male">
		FeMale: <input type="radio" name="gender" value="FeMale">
		<input type="submit" > 
	<br>
	</form>
	<br>

	<?php
	$name = $em = $gen = "";
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = check($_POST['fname']);
			$em = check($_POST['email']);
			$gen = check($_POST['gender']);
		}
		
		function check($data)
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		echo $name . "<br>";
		echo $em . "<br>";
		echo $gen . "<br>";
	
	?>

 
</body>
</html>