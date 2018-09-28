<?php
// Get Node Values
// Get Node Values - Loop
libxml_use_internal_errors(true);
$XML = simplexml_load_file("XMLfile3.xml") or die("Error: Object not Create");
// Get Node Values 
if($XML === false)
{
	echo "Failed loading XML: ";
	foreach(libxml_get_errors() as $error)
	{
		echo "<br> Error: " . $error->message;
	}
	
}
else
	{
		echo $XML->book[0]->auther ."<br>";
		echo $XML->book[1]->year ."<br>";
		echo $XML->book[1]->price ."<br>";
	}
// Use loop for get nodes values
	if($XML === false)
{
	echo "Failed loading XML: ";
	foreach(libxml_get_errors() as $error)
	{
		echo "<br> Error: " . $error->message;
	}
	
}
else
	{
		echo "<br> All Book Are: ";
		foreach($XML->children() as $books)
		{
			echo "<br>" . $books->title;
			echo "<br>" . $books->auther;
			echo "<br>" . $books->year;
			echo "<br>" . $books->price;
		}
	}
?>