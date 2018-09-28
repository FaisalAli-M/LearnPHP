<?php
// Type Hinting

function test(array $arr) // Here only Array can Receive in this Parameter  this is type casting
//without type casting only warning message show snd some code run in case of wrong type parameter but use of type casting fatal error show and no code exceute in case of wrong type parameter
{
	foreach($arr as $k => $v)
	{
		echo "<table>";
			echo "<tr><td>$k</td><td>$v</td></tr>";
		
		
		echo "</table>";
	}
}


$array = ['abc'=>'ABC' , 'xyz'=>'XYZ'];
test($array);

//See another Example 
?>