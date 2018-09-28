<?php


$note=<<<XML
<note type="private" perpose="Reminder"> 
<to> Faisal </to>
<from> Aliyan </from>
<body data="6-May" type="text"> I wanna talk to you </body>
</note>
XML;

$xmldoc = new DOMDocument();
$xmldoc->load("XMLfile.xml");

echo $xmldoc->saveXML(); // its show all element values

//Looping through XML
//We want to initialize the XML parser, load the XML, and loop through all elements of the <note> element:

$x = $xmldoc->documentElement;
foreach($x->childNodes as $items)
{
	echo "<br> " . $items->nodeName . " = " . $items->nodeValue; 
}
/*
In the example above you see that there are empty text nodes between each element.

When XML generates, it often contains white-spaces between the nodes. The XML DOM parser treats these as ordinary elements, and if you are not aware of them, they sometimes cause problems.

*/
?>