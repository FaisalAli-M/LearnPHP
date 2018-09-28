<!DOCTYPE html>
<html>
<body>

<?php
/*
Sometimes, when an exception is thrown, you may wish to handle it differently than the standard way. It is possible to throw an exception a second time within a "catch" block.

A script should hide system errors from users. System errors may be important for the coder, but are of no interest to the user. To make things easier for the user you can 
re-throw the exception with a user friendly message:
*/
 // Re-throw Error
 
 class findError extends Exception{
	 public function CusError()
	 {
		$errMess = " <b> Message: </b>" . $this->getMessage() . "<b> is Invalid Email </b>";
		return $errMess;
	 }
	 	 
 } 
	$em = "faisal.ali.aptechnn@gmail.com";
 try
 {
	 try{
		if($em == "faisal.ali.aptechnn@gmail.com")
		{
		 throw new Exception($em);
		}
	}
	catch(Exception $e)
	{
	 // Re-throw Exception
	 throw new findError($em);
	}
 }
 catch(findError $e)
 {
	 echo "<b> Error: </b>" . $e->CusError();
 }
 


?>

</body>
</html>