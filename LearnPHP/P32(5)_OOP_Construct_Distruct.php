<?php

class Bio {
	
	public function __construct() // it run Automatically;
	{
		echo "Faisal ali start <br>";
	}
	
	public function record(){
		$name = "Aliyan ALi <br>" ;
		echo $name;
	}
	public function __destruct() // it runs Automatically and End Coustruct work
	{
		echo "Faisal ali end <br>";
	}
}
$r = new Bio();
echo $r->record();

?>