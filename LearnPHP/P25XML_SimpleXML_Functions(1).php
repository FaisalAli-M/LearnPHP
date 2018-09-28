<?php
// Construct Object

$note=<<<XML
<note> 
<to> Faisal </to>
<from> Aliyan </from>
<body> I wanna talk to you </body>
</note>

XML;

$xml = new SimpleXMLElement($note);
echo $xml->asXML();

// we can also create constrct object of XML File like this
//$xml=new SimpleXMLElement("note.xml", 0, TRUE); // here 0 Specifies additional Libxml parameters. Is set by specifying the option and 1 or 0 (TRUE or FALSE, e.g. LIBXML_NOBLANKS(1)) 
//here TRUE specifies that data is a path/URL to an XML document instead of string data. Default is FALSE
//echo $xml->asXML();


// Add Attribute function

$xml->addAttribute("type" , "private");
echo "<br> note Attribute value is "  . $xml["type"];

$xml->body->addAttribute("sub","text");
echo "<br> body Attribute value is "  . $xml->body["sub"];

// addChild Attribute
$xml->addChild("footer" , "this is footer"); // // Add a child element after the last element inside note
echo "<br> New note: " .  $xml->asXML();

$xml->to->addChild("CC" , "new email"); // // Add a child element to the to element
echo "<br> New note: " .  $xml->asXML();




?>