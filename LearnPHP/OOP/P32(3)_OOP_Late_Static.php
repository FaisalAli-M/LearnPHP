<?php

// Late Static Example
class DB {
	
	protected static $Table = 'Base Class Table';
	
	public function insert()
	{
		echo "Insert into " . static::$Table;
	}
	public function select()
	{
		echo "Select from " . static::$Table; // here static use reason is that it echo whose class $table variable which class object has been create after extends DB Class this is Late Static 
	}
}

class fk extends DB{
	
	protected static $Table = 'Child Class Table';
}

$a = new fk();
$a->insert();

echo "<br><br><br>";

// Normal Static Example
class DB1 {
	
	protected static $Table1 = 'Base Class Table';
	
	public function insert1()
	{
		echo "Insert into " . self::$Table1;
	}
	public function select1()
	{
		echo "Select from " . self::$Table1; // here self use reason is that it echo Parent class $table variable this is Static beacuse of compile time and run time differnce between both of them
	}
}

class fk1 extends DB1{
	
	protected static $Table1 = 'Child Class Table';
}

$a1 = new fk1();
$a1->insert1();
?>