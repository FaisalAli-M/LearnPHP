<?php

// SimpleXML Parser

$XMLData = "<?xml version='1.0' encoding='UTF-8' ?>
<note>
<to> Aliyaan </to>
<from> Faisal </from>
<sub>  Reminder </sub>
<message> i wanna meet you </message>
</note>
";
//simplexml_load_string function  this is use to load xml code which is save in String 
$XML = simplexml_load_string($XMLData);
print_r($XML);

echo "<br> Read from file: <br> ";
//simplexml_load_file   this is use to load xml code from file 
$XML2 = simplexml_load_file("XMLfile.xml");
print_r($XML2);

?>