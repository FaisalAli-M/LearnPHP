<?php
/* 
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
*/
define ("name" , "faisal"); // case-sensitive
echo name;

echo "<br>";

define ("name2","Ali","true");
echo NAME2;
 echo "<br>";
/*
onstants are automatically global and can be used across the entire script.

The example below uses a constant inside a function, even if it is defined outside the function:

*/

define ("name3","Aliyan");

function cal(){
	echo name3;
}

cal();

?>