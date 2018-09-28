<!DOCTYPE html>
<html>
<body>

<?php
/*
Creating a Custom Error Handler
*/
// trigger_error

//To trigger an error from within your script, call the trigger_error() function, passing in the error message that you want to generate:

function divide($dividend, $divisor)
{
	if($divisor == 0)
	{
		trigger_error("you can not divide any Number by Zero");
	}
	else
	{
		return($dividend/$divisor);
	}
}
// Now Call a Function
echo divide(10 , 0);

// IF WE USE WITHOUT TRIGGER Error 

/*
function calcDivision($dividend, $divisor){
    return($dividend / $divisor);
}
 
// Calling the function
echo calcDivision(10, 0);

AND Error will be:
Warning: Division by zero in C:\wamp\www\project\test.php on line 3
This message doesn't look very informative. so we use trigger_error to make it More informative for user

*/



?>

</body>
</html>