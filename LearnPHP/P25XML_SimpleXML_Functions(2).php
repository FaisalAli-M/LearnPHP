<?php


$note=<<<XML
<note type="private" perpose="Reminder"> 
<to> Faisal </to>
<from> Aliyan </from>
<body data="6-May" type="text"> I wanna talk to you </body>
</note>


XML;

$xml = simplexml_load_string($note);
//Attribute Function

foreach($xml->attributes() as $a=>$b) // this method is use to get the attribute of root element
{
	echo "Attibute of Note element " . $a . " = " .$b . "<br>";
}


foreach($xml->body[0]->attributes() as $a1=>$b1) // this method is use to get the attribute of root of Child element // here if we have more body elements so we write body[1] , body[2] and  so on like XMLFile3.xml
{
	echo "Attibute of body element " . $a1 . " = " .$b1 . "<br>";
}
echo "<br>";

$note2=<<<XML
<note type="private" perpose="Reminder"> 
<to> Faisal </to>
<from> Aliyan </from>
<body data="6-May" type="text"> <span> Important: </span> I wanna talk to you </body>
</note>
XML;

// Children() Function
$xml=simplexml_load_string($note2);
foreach ($xml->children() as $child) // Find the children of the note node (Element):
  {
  echo "Child node: " . $child . "<br>";
  }
  echo "<br>";
  
foreach ($xml->body->children() as $child) // Find the children of the note node (Element):
  {
  echo "Body Child node: " . $child . "<br>";
  }

//getName function
$note3=<<<XML
<Children>  
<children1> </children1>
<children2> </children2>
<children3> </children3>
</Children>
XML;

$xml3 = new SimpleXMLIterator($note3);
echo "<br>" . $xml3->getName();


	foreach($xml3->children() as $child)
	{
		echo "<br>" . $child->getName();
	}


?>