<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$name = $_POST['fname'];
	$em = $_POST['email'];
	if(empty($name))
	{
		echo "Enter Name";
	}
	else if(empty($em))
	{
		echo "Enter Email";
	}
	else
	{
		echo "Name is " . $name . "<br> Email is " . $em;
	}
}


if($_SERVER['REQUEST_METHOD'] == "GET")
{
	$name = $_GET['fname'];
	$em = $_GET['email'];
	if(empty($name))
	{
		echo "Enter Name";
	}
	else if(empty($em))
	{
		echo "Enter Email";
	}
	else
	{
		echo "Name is " . $name . "<br> Email is " . $em;
	}
}

?>