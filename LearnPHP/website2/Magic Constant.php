<?php

echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 2
echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 3
echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 4

// Displays the absolute path of this file
echo "The full path of this file is: " . __FILE__ . "<br>";

// Displays the directory of this file
echo "The directory of this file is: " . __DIR__ . "<br>";

//function
function myFunction(){
    echo  "The function name is - " . __FUNCTION__ . "<br>";
}
myFunction() ; // Displays: The function name is - myFunction

//Class
class MyClass
{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new MyClass();
echo $obj->getClassName() . "<br>"; // Displays: MyClass

//another class
class Sample
{
    public function myMethod(){
        echo __METHOD__;
    }
}
$obj = new Sample();
$obj->myMethod() . "<br>"; // Displays: Sample::myMethod

// namesapce and class
/*
namespace MyNamespace;
class MyClass
{
    public function getNamespace(){
        return __NAMESPACE__;
    }
}
$obj = new MyClass();
echo $obj->getNamespace(); // Displays: MyNamespace
*/
?>