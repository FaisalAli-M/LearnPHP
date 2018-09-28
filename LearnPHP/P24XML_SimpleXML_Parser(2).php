<?php

// SimpleXML Parser 
// Error Handling

libxml_use_internal_errors(true);
$XMLData = "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to> Aliyaan </to>
<from> Faisal </from>
<sub>  Reminder </sub>
<message> i wanna meet you </message>
</note>
";

$XML = simplexml_load_string($XMLData);
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