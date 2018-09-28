<!DOCTYPE html>
<html>
<body>

	<a href="P9%20SuperGlobals(4).php?sub=php&web=Turorial" > GET </a> <!-- here you can write page name where you want to sent data -->

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

	
	// Use of $_GET
	// PHP $_GET is used to collect data after submitting an HTML form through URL.
	
	echo "Study " . $_GET['sub'] . " at " . $_GET['web'];

	
?>
 
</body>
</html>