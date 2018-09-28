<?php

class countries {
	 
	public $pk = "Pakistan";
	public $sa = "South africa";
	public $en = "England";
}
class players extends countries{
	public $n1 = "Afridi";
	public $n2 = "Amla";
	public $n3 = "Bopara";
	
	public function run()
	{
		echo $this->n1 . " is from " . $this->pk . "<br>";
		echo $this->n2 . " is from " . $this->sa ;
	}	
}

$pl = new players();
$pl->run();
?>