<!DOCTYPE html>
<html>
<body>

<?php

/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
*/
	// Index Array
	$names = array("Danish","Mehmood","Faisal","Azhar");
	sort($names);
	// Calling Array Using loop
	
	$coun = count($names);
	for($x=0 ; $x < $coun ; $x++)
	{
	echo "Name is " . $names[$x] . "<br>";
	}
	
	$names2 = array("Danish","Mehmood","Faisal","Azhar");
	rsort($names2);
	echo " <br>Decending order  <br>";
	// Calling Array Using loop
	
	$coun2 = count($names2);
	for($x=0 ; $x < $coun2 ; $x++)
	{
	echo "Name is " . $names2[$x] . "<br>";
	}
	// Numberz

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}	
?>
 
</body>