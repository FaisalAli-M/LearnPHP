<?php
// Include class definition
require "Rectangle.php";
 
// Create a new object from Rectangle class
$obj = new Rectangle;
 
// Get the object properties values
echo $obj->length . "<br>";
echo $obj->width . "<br>";
 
// Set object properties values
$obj->length = 30;
$obj->width = 20;
 
// Read the object properties values again to show the change
echo $obj->length . "<br>";
echo $obj->width . "<br>";
 
 
// Call the object methods
echo $obj->getPerimeter() . "<br>";
echo $obj->getArea() . "<br>";
?>                                		