<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<?php

	// Editing in a Exiting file

		$op = fopen("fk.txt" , "w"); // use "w" Erase previous data of file and write new text in it 
		// Now write something on it
		echo fwrite($op , "how are you");
		fclose($op);
		

	
	

?>
	
</body>
</html>