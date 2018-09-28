<!DOCTYPE html>
<html>
<body>

	

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
	// Use of $GLOBALS
	$x = 3 ;
	$y = 16;
	
	function sum(){
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	sum();
	echo $z;
	//End
	
	
	
?>
 
</body>
</html>