<?php
namespace MyNamespace;
class MyClass
{
    public function getNamespace(){
        return __NAMESPACE__;
    }
}
$obj = new MyClass();
echo $obj->getNamespace();
?>