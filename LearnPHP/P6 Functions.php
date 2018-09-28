<!DOCTYPE html>
<html>
<body>

<?php
	function forPrint()
	{
		echo "Name is Faisal <br>";
	};
	forPrint();
	
	// fuction with one parameter
	
	function sName($x)
	{
		echo "Name is $x <br>";
	};
	sName("Danish");
	sName("Mehmood");
	
	// function with Two Parameters
	
	function fName($n , $f)
	{
		echo "Full name is $n  $f <br>";
	};
	fName("Azhar" , "Asghar");
	fName("Uzair","Rehman");
	
	// function with Default Parameter

		function num($x = 10)
		{
			echo "Number is $x <br>";
		};
		num(12);
		num();
		num(14);
		
		// function with return
		
		function ret($a , $b)
		{
			$z = $a + $b;
			return $z . "<br>";; 
			
		}
		echo " Sum is " . ret(10 , 20);
		echo " Sum is " . ret(5 , 8);
	

?>
 
</body>
</html>