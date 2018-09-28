<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<?php

	// feof 
	/*
		The feof() function checks if the "end-of-file" (EOF) has been reached.

		The feof() function is useful for looping through data of unknown length.	
	*/
	
	$op = fopen("Check.txt" , "r") or die("Unable to open file!");
	while(!feof($op))
	{
		echo fgets($op);
		echo "<br>";
	}
	fclose($op);

?>
	
</body>
</html>