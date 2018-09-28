<!DOCTYPE html>
<html>
<body>

<?php
/*
	this Example is a Combination of P21 Error Handling(2) and P21 Error Handling(3)
*/
// Create Function for Error
function cusErr($errno , $errstr)
{
	echo "<b>Error </b>: [$errno] <b> Message </b> $errstr";
	echo "<br> Ending Script";
}
// set this Function in set_error_handler
set_error_handler("cusErr",	E_USER_WARNING);

// Now Create Division Function

function divide($n1 , $n2)
{
	if($n2 == 0)
	{
		trigger_error(" You Can not divide any Num by Zero " , 	E_USER_WARNING);
		echo " Check ";
	}
	else
	{
		return($n1/$n2);
	}
}

// Now Call a Function
echo divide(10 , 0);
echo "<br>" . divide(10 , 2);




?>

</body>
</html>