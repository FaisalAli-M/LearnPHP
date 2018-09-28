<!DOCTYPE html>
<html>
<body>

<?php
$x = 2;
while($x < 7)
	{
	echo "Faisal" . $x . "<br>";
	$x++; 
	}
	// do while
	
	$y = 2; 
	do{
		echo "Ali" . $y . "<br>";
		$y++;
	}while($y < 7);
	
	for($a = 0 ; $a <= 5 ; $a++)
	{
		echo "num is $a <br>";
	}
	
	$names = array("faisal","danish","mehmood","azhar");
	foreach($names as $n)
	{
		echo $n . "<br>";
	}

?>
 
</body>
</html>