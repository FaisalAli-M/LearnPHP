<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<?php

	// Create a File which name is fk.txt and write something on it

		$op = fopen("fk.txt" , "w"); // if file name does not exist so i will create a file
		// Now write something on it
		echo fwrite($op , "Hello faisal Ali");
		fclose($op);
		

	
	

?>
	
</body>
</html>