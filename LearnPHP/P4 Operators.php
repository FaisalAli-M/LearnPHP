<?php

$a = 10;
echo ++$a; // Pre-increment	Increments $x by one, then returns $x
echo "<br>"; 

$x = 10; 
echo $x++; // Post-increment	Returns $x, then increments $x by one
echo "<br>"; 

$x2 = 10;  
echo --$x2;
echo "<br>"; 

$x3 = 10;  
echo $x3--;
echo "<br>"; 

// Logical Operators

$b = 100;  
$c = 50;

if ($b == 100 and $c == 50) {
    echo "both b and c are TRUE";
}
echo "<br>"; 

if ($b == 100 or $c == 40) {
    echo "b is TRUE";
}
echo "<br>"; 

if ($b == 100 xor $c == 50) { // True if either $x or $y is true, but not both
    echo "b is TRUE";  
}
echo "<br>"; 

if ($b == 100 && $c == 50) {
    echo "both b and c are TRUE";
}
echo "<br>"; 

if ($b == 100 || $c == 40) {
    echo "b is TRUE";
}
echo "<br>"; 

// PHP String Operators
$txt1 = "faisal ";
$txt2 = "Ali";
echo $txt1 . $txt2; // 	Concatenation of $txt1 and $txt2

echo "<br>"; 

$txt3 = "Aliyan";
$txt3 .= $txt2; // Appends $txt3 to $txt2
echo $txt3;


?>