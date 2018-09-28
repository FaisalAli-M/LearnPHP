<?php
// Create array with Name
$a[] = "Aliyan";
$a[] = "Azhar";
$a[] = "Billu";
$a[] = "Danish";
$a[] = "English";
$a[] = "Faisal";
$a[] = "Mehmood";

$q = $_REQUEST["f"];

$hint = "";
if($q !== "")
{
	$q = strtolower($q);
	$len = strlen($q);
	
	foreach($a as $name)
	{
		if(stristr($q , substr($name , 0 , $len)))
		{
			if($hint === "")
			{
				$hint = $name;
			}
			else
			{
				$hint .= " , $name ";
			}
		}
	}
}
echo $hint === "" ? "no suggestion" : $hint;

?>