<?php

class ABC {
	
	public function doSomething()
	{
		echo "abc class dosomthing";
	}
}
class XYZ {
	
	public function doSomethingelse()
	{
		echo "xyz class dosomthing";
	}
}

function test(ABC $abc)
{
	$abc->doSomething();
}

$abc = new ABC();
test($abc); // it donot show any error beacause ABC class object can pass as a Parameter and here we can Pass correct class object

$xyz = new XYZ(); 
test($xyz); // it shows error beacuse only ABC class object can pass beacuse of type hinting
?>