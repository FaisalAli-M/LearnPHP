<?php

class db{
	
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $db_name = "form";
	
	public $link;
	public $error;
	
	public function __construct()
	{
		$this->connect();
	}
	
	public function connect(){
		$this->link = new mysqli($this->host , $this->user , $this->pass , $this->db_name);
		if(!$this->link)
		{
			$this->error = "Connection Failed" . $this->link->connect_error;
		}
		
	}
	public function insert($q){
		$result = $this->link->query($q);
		
		if(!$result)
		{
			echo "Insert Failed";
		}
		else{
			echo "Insert Sucessfully";
		}
	}
}




?>