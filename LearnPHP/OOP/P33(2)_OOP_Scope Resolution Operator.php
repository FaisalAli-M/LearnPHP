<?php
/*
When an extending class overrides the parents definition of a method, PHP will not call the parent's method. 
It's up to the extended class on whether or not the parent's method is called. This also applies to Constructors and Destructors, 
Overloading, and Magic method definitions.

*/
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();
?>