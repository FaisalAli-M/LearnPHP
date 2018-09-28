<!DOCTYPE html>
<html>
<body>

<?php
/*

*/
// Create Funtion to Handle Exception


function checkNum($er)
{
if($er > 2)
{
	throw new Exception("Number is Out of Range"); //  throw exception without Catch block
	
}
return true;
}

//  Call a funtion or trigger exception
checkNum(3);

// Error main Uncaught Error ayega qk humny yaha Exception ko Catch nhe kiya hai
// Har throw ka kam sy kam ek Catch block hona Chaheye
// this is code Proper Code for Handle Exception

?>

</body>
</html>