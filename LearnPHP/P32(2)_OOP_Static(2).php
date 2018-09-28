<?php

// We can use static for count class total object create because it depend on class so it work properly othher wise normal properties and function depend on object 
// so these not count properly


class abc {
	public static $count = 0 ;
	public static function get_object_count()
	{
		return self::$count;
		
	}	
	public function __construct()
	{
		self::$count ++;
	}
	
}
$a = new abc();
$b = new abc();
$c = new abc();
$d = new abc();

echo abc::get_object_count();
?>