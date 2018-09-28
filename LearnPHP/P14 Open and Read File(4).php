<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<?php

	// The fgetc() function is used to read a single character from a file.

		$op = fopen("Check.txt" , "r") or die("Unable to open file!");
		echo fgetc($op);
		fclose($op);

	
	

?>
	
</body>
</html>