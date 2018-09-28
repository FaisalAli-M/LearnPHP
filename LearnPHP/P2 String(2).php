<?php

// Returns a string with backslashes in front of the specified characters

echo "<br> <h2> References String </h2>";
$strr = addcslashes("Hello World!","l");
echo($strr);

$strr2 = "Welcome to my humble Homepage!";
echo "<br>" . $strr2."<br><br>";
echo addcslashes($strr2,'m')."<br><br>";

$str = "Welcome to my humble Homepage!";
echo $str."<br><br>";
echo addcslashes($str,'A..Z')."<br><br>"; // it add slashes before all alphabets who has in Upper case
echo addcslashes($str,'a..z')."<br><br>"; // it add slashes before all alphabets who has in Lower case
echo addcslashes($str,'a..g'); // it add slashes before a to g alphabets who has in Lower case

/*
The addslashes() function returns a string with backslashes in front of predefined characters.
The predefined characters are:
single quote (')
double quote (")
backslash (\)
NULL
*/
echo "<br><h2> addslashes() function </h2> <br>";

$str2 = "<br> who's faisal ali \is a good boy "  ;
echo addslashes($str2) . "faisal <br>";

/*
The bin2hex() function converts a string of ASCII characters to hexadecimal values. 
The string can be converted back using the pack() function.
*/
echo "<br><h2> The bin2hex() function and pack() function </h2> <br>";

$str3 = bin2hex("Hello faisal");
echo "<br>" . $str3 . "<br>";
echo pack("H*",$str3);

//The chop() function removes whitespaces or other predefined characters from the right end of a string.
echo "<br><h2> The chop() function </h2> <br>";

$str4 = "Hello Faisal";
echo chop($str4 , "Faisal"); // Remove characters from the right end of a string:

echo "<br>";
$str5 = "Hello World!\n\n";
echo chop($str5); //Remove newlines (\n) from the right end of a string:

/*
The following characters are removed if the charlist parameter is empty:
"\0" - NULL
"\t" - tab
"\n" - new line
"\x0B" - vertical tab
"\r" - carriage return
"   " - ordinary white space
can be remove
*/ 
?>