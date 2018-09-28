<?php

class school {
	
	public $s1_name = "Faisal"; // it can be use any where
	protected $s2_name = "Danish"; // it can be use into this class and child class
	private $s3_name = "Mehmood"; // it can be use into this class
	
	public function class1()
	{
		return "<br>" . $this->s3_name;
	}	
	
}
class school2 extends school{
	
	public function class2()
	{
		return "<br>" . $this->s2_name;
	}	
	
}


$instance = new school();
echo $instance->s1_name;

echo $instance->class1();

$instance2 = new school2();
echo $instance2->class2();
?>