<?php

$XMLData = "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to> Aliyaan </to>
<from> Faisal </from>
<sub>  Reminder </sub>
<message> i wanna meet you </message>
<signature> Ali </signature>
</note>
";

$XML = simplexml_load_string($XMLData) or die("Error: cannot create object"); // here we can also load xml from file

echo $XML->to;
echo $XML->from;
echo $XML->signature;


?>
