<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H"); // H dontes HOURS
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";

$color = "orange";

switch($color)
{
	case "red":
	echo "Color is red";
	break;
	
	case "orange":
	echo "color is orange";
	break;
	
	case "blue": 
	echo "color is blue";
	break;
	
	default:
	echo "Nothinh is MATCH";
}
?>
 
</body>
</html>