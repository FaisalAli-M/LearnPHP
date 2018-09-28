<!DOCTYPE html>
<html>
<head>
<title> PHP Strings </title>
</head>

<body>
<?php
$heading = "Hy Faisal is Here";
echo "Heading is " . $heading;

echo "<br>";
// String Methods for Length
echo strlen($heading);

echo "<br>";
// String Methods for Words Counting
echo str_word_count($heading);

echo "<br>";
// String Methods for Reverse
echo strrev($heading);

echo "<br>";
// String Methods for Find Position
echo strpos($heading , "Faisal");

echo "<br>";
// String Methods for Replace word
$re = "there";
$r = "here";
echo str_replace($r , $re , $heading);

echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");


?>
</body>
</html>