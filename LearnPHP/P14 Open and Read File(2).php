<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<?php
// A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.

	//	fgets 
	// The fgets() function is used to read a single line from a file.
	$op = fopen("Check.txt","r") or die("Unable to open file!");
	echo fgets($op);
	fclose($op);
	
	
	

?>
	
</body>
</html>