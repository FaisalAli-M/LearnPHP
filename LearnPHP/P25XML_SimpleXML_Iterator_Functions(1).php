<?php


$note=<<<XML
<note type="private" perpose="Reminder"> 
<to> Faisal </to>
<from> Aliyan </from>
<body data="6-May" type="text"> I wanna talk to you </body>
</note>
XML;

$xml = new SimpleXMLIterator($note);
echo $xml->current(); 
var_dump($xml->current()); // ans = null

echo "<br>";
$xml->rewind();
echo $xml->current();
echo "<br>"; 
var_dump($xml->current());

$note2=<<<XML
<note type="private" perpose="Reminder"> 
<to> Faisal </to>
<from> Aliyan </from>
<body data="6-May" type="text"> I wanna talk to you </body>
</note>
XML;

echo "<br>";
$xml = new SimpleXMLIterator($note);
echo $xml->valid()); 
var_dump($xml->alid()); // ans = null

echo "<br>";
$xml->rewind();
echo $xml->next();
echo "<br>"; 
var_dump($xml->next());

?>