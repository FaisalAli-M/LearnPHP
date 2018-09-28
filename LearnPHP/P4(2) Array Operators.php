<?php

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
echo "<br>";

var_dump($x == $y); // Returns true if $x and $y have the same key/value pairs
echo "<br>";

var_dump($x === $y); // Returns true if $x and $y have the same key/value pairs in the same order and of the same types
echo "<br>";

var_dump($x != $y); // Returns true if $x is not equal to $y
echo "<br>";

var_dump($x <> $y); //Returns true if $x is not equal to $y
echo "<br>";

var_dump($x !== $y); // Returns true if $x is not identical to $y
?>  

