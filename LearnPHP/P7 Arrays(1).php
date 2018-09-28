<!DOCTYPE html>
<html>
<body>

<?php
	// Index Array
	$names = array("Danish","Mehmood","Faisal","Azhar");
	// Calling array one by one using index
	echo $names[0] . "<br>";
	echo $names[1] . "<br>";
	echo $names[3] . "<br>";
	
	// Calling Array Using loop
	
	$coun = count($names);
	for($x=0 ; $x < $coun ; $x++)
	{
	echo "Name is " . $names[$x] . "<br>";
	}
?>
 
</body>
</html>