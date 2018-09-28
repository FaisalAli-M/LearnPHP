<?php
/*
include("classes/faisal.php");
include("classes/Danish.php");
include("classes/mehmood.php");
*/

function __autoload($c_name)
{
	include("classes/$c_name.php"); // it include all classes who have in classes director
}

$fa = new faisal();
echo $fa->name;

$da = new Danish();
echo $da->name;

$ma = new mehmood();
echo $ma->name;

?>