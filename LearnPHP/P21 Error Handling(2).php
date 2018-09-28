<!DOCTYPE html>
<html>
<body>

<?php
/*
Creating a Custom Error Handler

*/
// Creating a Function for Error
function cusError($errno , $errstr)
{
	echo "<b>Error:</b> [$errno] $errstr";
}

// Now set this Fuction into set_error_handler

set_error_handler("cusError");

echo ($test);

// Since we want our custom function to handle all errors, the set_error_handler() only needed one parameter, 
// a second parameter could be added to specify an error level.



?>

</body>
</html>