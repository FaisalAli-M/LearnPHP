<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<?php

	// Editing in a Exiting file

		$op = fopen("fk.txt" , "a"); // use "a" Save previous data of file and write text  
		// Now write something on it
		echo fwrite($op , " Fine and You? ");
		fclose($op);
		

	
	

?>
	
</body>
</html>