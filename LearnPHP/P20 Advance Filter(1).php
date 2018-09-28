<!DOCTYPE html>
<html>
<body>

<?php
/*
The following example uses the filter_var() function to check if a variable is both of type INT, and between 20 and 80:
*/
$int = 60;
$min = 20;
$max = 80;

if(filter_var($int, FILTER_VALIDATE_INT , array("options" => array("min_range"=> $min , "maz_range"=>$max))) === false)
{
	echo "Variable value is not within the legal range";
}
else
{
	echo "Variable value is within the legal range";
}

?>

</body>
</html>