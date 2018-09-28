<?php

// Constant outside class called non class Constants
define("name2","Aliyan Ali");

// Constant in class called class Constants
class school {
	const name = "Faisal ALi";
	
}

echo school::name; // access same as static keyword
echo "<br>" . name2;
?>