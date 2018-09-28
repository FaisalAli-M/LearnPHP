<!DOCTYPE html>
<html>
<body>

<?php
/*
*/
 // Create Custom Exception Class
 
 class findError extends Exception{
	 public function CusError()
	 {
		$errMess = "Error in line " . $this->getLine() . " in " . $this->getFile(). " <b> Message: </b>" . $this->getMessage() . "<b> is Invalid Email </b>";
		return $errMess;
	 }
	 	 
 } 
	$em = "faisal.ali.aptechnn@gmail....com.";
 try{
	 if(filter_var($em , FILTER_VALIDATE_EMAIL) === false)
	 {
		 throw new findError($em);
	 }
	 else{
		 echo "Valid email Adress";
	 }
 }
 catch(findError $e)
 {
	 echo $e->CusError();
 }
 


?>

</body>
</html>