<!DOCTYPE html>
<html>
<body>

<?php
/*
THROW = throw Exception waly Fucntion ko Check krta h or Agr Exception arahe hoti hai to ust thwor krdyta hai
TRY = try mai hum woh wala function call krty hen jis mai exception aaskti hai or agr exception aati hai to woh catch mai chali jati hai wrna try k andr wala code run hojata hai
CATCH = catch Exception ko hasil krta h or us Exception ka object bana kr us Exception k Message ko Display krdyta hai
*/
// Create Funtion to Handle Exception


function checkNum($chk)
{
if($chk > 2)
{
	throw new Exception("Number Must me 2 or below them "); //  throw exception 
	
}
return true;
}

//  Call a funtion or trigger exception in try blcok
try{
checkNum(3); // agr Exception aaya to nichy wala Code nhe run hoga or yeh yaha sy he Catch block mai jump kr jayega
// or age Exception nhe aya to phr Nichy wala Code run hoga
echo "Correct Number";
}
catch(Exception $e)
{
	echo " Error is " . $e->getMessage();
}



?>

</body>
</html>