<!DOCTYPE html>
<html>
<body>

<?php
	// Associative Array
	$names = array("n1"=>"Danish", "n2"=>"Mehmood", "n3"=>"Faisal", "n4"=>"Azhar");
	// Calling array one by one using index
	
	echo "Name is " . $names['n1'] ;
	echo "Name is " . $names['n3'] ;
	
	// for each loop
	
	foreach($names as $naam => $naam_va)
	{
		echo " <br> Key is " . $naam . " Value is " . $naam_va;
	};
?>
 
</body>