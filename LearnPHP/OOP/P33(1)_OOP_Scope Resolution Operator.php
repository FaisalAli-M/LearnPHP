<?php
 // Scope Resolution Operator = ::
 
 class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE . "<br>";  // As of PHP 5.3.0

echo MyClass::CONST_VALUE . "<br>";


class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "<br>";
        echo self::$my_static . "<br>";
    }
}

$classname = 'OtherClass';
$classname::doubleColon(); // As of PHP 5.3.0

OtherClass::doubleColon();
?>