<?php
/*
The chr() function returns a character from the specified ASCII value.
The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.
*/
echo "<h2> The chr() function </h2> <br>";
// Return characters from different ASCII values:
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value

$str = chr(046);
echo "You $str me forever!"; // Using the octal value 046 to add the ASCII Character: &.

$str2 = chr(43);
$str3 = chr(61);
echo "<br>";
echo("2 $str2 2 $str3 4"); // Using the decimal values 43 and 61 to add the ASCII Characters: + and =.

echo "<h2> The chunk_split function </h2> <br>";

$str4 = "Hello Faisal";
echo chunk_split($str4,"1",".");
echo "<br>";
echo chunk_split($str4,"6","....");
/*
Parameter	Description
string		Required. Specifies the string to split
length		Optional. A number that defines the length of the chunks. Default is 76
end			Optional. A string that defines what to place at the end of each chunk. Default is \r\n
*/

echo "<h2> The convert_uudecode and convert_uuencode function </h2>";
$str5 = "Hello world!";
// Encode the string
$encodeString = convert_uuencode($str5);
echo "<br>" .$encodeString . "<br>";

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo $decodeString;
?>