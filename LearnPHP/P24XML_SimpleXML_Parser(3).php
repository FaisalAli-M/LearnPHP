<?php
libxml_use_internal_errors(true);
// SimpleXML Parser 
// Error Handling

$XML = simplexml_load_file("XMLfile2.xml");
if($XML === false)
{
	 echo "Failed loading XML: ";
	foreach(libxml_get_errors() as $error)
	{
		
		echo "<br>", $error->message;
	}
}
else
{
	print_r($XML);
}

?>