<!DOCTYPE html>
<html>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- if we want to send value in other page so in action write file name -->
		Name: <input type="text" name="fname" >
		<input type="submit" > this is POST global
	<br>
	</form>
	<br>

<?php
	/*
	The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
	*/

	
	// Use of $_POST
	// PHP $_POST is used to collect data after submitting an HTML form.
	
	if($_SERVER['REQUEST_METHOD']  == "POST")
	{
		$name = $_POST['fname'];
		if(empty($name))
		{
			echo "Plz Enter Name";
		}
		else
		{
			echo "Name is " . $name;	
		}
	}

	
?>
 
</body>
</html>