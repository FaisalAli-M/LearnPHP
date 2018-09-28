<?php

class school {
	
	public static $s1_name = "Faisal"; // it can be use any where
	
	
	public static function class1()
	{
		return "<br>" . self::$s1_name;
	}	
	
}
class school2 extends school{
	
	public static function class2()
	{
		return "<br>" . parent::$s1_name;
	}	
	public function class3()
	{
		return "<br>" . parent::$s1_name;
	}	
	
}

echo school::$s1_name;
echo school::class1();
echo school2::class2();

$instance = new school2();
echo $instance->class3();

?>