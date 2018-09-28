<!DOCTYPE html>
<html>
<body>

<?php
	// Associative Array
	/*
	asort() - sort associative arrays in ascending order, according to the value
	ksort() - sort associative arrays in ascending order, according to the key
	arsort() - sort associative arrays in descending order, according to the value
	krsort() - sort associative arrays in descending order, according to the key
	*/
	
	//Assending According to value
	$names = array("n1"=>"Danish", "n2"=>"Mehmood", "n3"=>"Faisal", "n4"=>"Azhar");
	asort($names);
	echo " <br> Accending Accoding to value  <br>";
	
	// for each loop
	
	foreach($names as $naam => $naam_val)
	{
		echo " <br> Key is " . $naam . " Value is " . $naam_val;
	};
	
	// Accending According to Key
	$names2 = array("n1"=>"Danish", "n2"=>"Mehmood", "n3"=>"Faisal", "n4"=>"Azhar");
	ksort($names2);
	echo " <br> Accending Accoding to key  <br>";
	// for each loop
	
	foreach($names2 as $naam2 => $naam2_val)
	{
		echo " <br> Key is " . $naam2 . " Value is " . $naam2_val;
	};
	
	
	//Decending According to value
	$names3 = array("n1"=>"Danish", "n2"=>"Mehmood", "n3"=>"Faisal", "n4"=>"Azhar");
	arsort($names3);
	echo " <br> Decending Accoding to value  <br>";
	
	// for each loop
	
	foreach($names3 as $naam3 => $naam3_val)
	{
		echo " <br> Key is " . $naam3 . " Value is " . $naam3_val;
	};
	
	// Decending According to Key
	$names4 = array("n1"=>"Danish", "n2"=>"Mehmood", "n3"=>"Faisal", "n4"=>"Azhar");
	krsort($names4);
	echo " <br> Decending according to key  <br>";
	// for each loop
	
	foreach($names4 as $naam4 => $naam4_val)
	{
		echo " <br> Key is " . $naam4 . " Value is " . $naam4_val;
	};
	
?>
 
</body>