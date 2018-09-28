<?php
// Class definition

/*
In addition to the visibility, properties and methods can also be declared as static, which makes them accessible without needing an instantiation of the class. Static properties and methods can be accessed using the scope resolution operator (::), like this: ClassName::$property and ClassName::method().
A property declared as static cannot be accessed via the object of that class though a static method can be, as demonstrated in the following example:
*/
    
    
class HelloClass
{
    // Declare a static property
    public static $greeting = "Hello World!";
    
    // Declare a static method
    public static function sayHello(){
        echo self::$greeting;
    }
}
// Attempt to access static property and method directly
echo HelloClass::$greeting; // Output: Hello World!
HelloClass::sayHello(); // Output: Hello World!
 
// Attempt to access static property and method via object
$hello = new HelloClass;
//echo $hello->greeting; // Strict Warning
$hello->sayHello(); // Output: Hello World!

/*
The keyword self in the above example means "the current class". It is never preceded by a dollar sign ($) and always followed by the :: operator (e.g. self::$name).
The self keyword is different from the this keyword which means "the current object" or  "the current instance of a class". The this keyword is always preceded by a dollar sign ($) and followed by the -> operator (e.g. $this->name).

Note:Since static methods can be called without an instance of a class (i.e. object), the pseudo-variable $this is not available inside the method declared as static.
*/
?>

