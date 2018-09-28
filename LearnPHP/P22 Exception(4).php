<!DOCTYPE html>
<html>
<body>

<?php
/*
It is possible for a script to use multiple exceptions to check for multiple conditions.
It is possible to use several if..else blocks, a switch, or nest multiple exceptions. 
These exceptions can use different exception classes and return different error messages:
*/
 // Multiple Exceptions
 
 class findError extends Exception{
	 public function CusError()
	 {
		$errMess = "Error in line " . $this->getLine() . " in " . $this->getFile(). " <b> Message: </b>" . $this->getMessage() . "<b> is Invalid Email </b>";
		return $errMess;
	 }
	 	 
 } 
	$em = "faisal.ali.aptechnn@gmail.com";
 try{
	 if(filter_var($em , FILTER_VALIDATE_EMAIL) === false)
	 {
		 throw new findError($em);
	 }
	 if($em == "faisal.ali.aptechnn@gmail.com")
	 {
		 throw new Exception("You Can't use this Email beacuse it is an Admin's Email");
	 }
 }
 catch(findError $e)
 {
	 echo $e->CusError();
 }
 catch(Exception $e2)
 {
	 echo "<b> Error: </b>" . $e2->getMessage();
 }
 


?>

</body>
</html>