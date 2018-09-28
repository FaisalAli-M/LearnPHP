<!DOCTYPE html>
<html>
<body>

<?php
/*
The set_exception_handler() function sets a user-defined function to handle all uncaught exceptions.
*/
 // Set a Top Level Exception Handler
 
 function cusError($exception)
 {
	 echo " Warrning: " . $exception->getMessage();
 }
 set_exception_handler('cusError');
 
 $em = "faisal.ali.aptechnn@gmail...";
 
 if(filter_var($em , FILTER_VALIDATE_EMAIL) === false)
	 {
 
		throw new Exception(" Error Occure ");
	 }
	 else{
		 echo "Valid";
	 }
 
/*
In the code above there was no "catch" block. Instead, the top level exception handler triggered. This function should be used to catch uncaught exceptions. 
*/

?>

</body>
</html>