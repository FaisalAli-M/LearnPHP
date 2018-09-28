<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	

	<?php
		/*
		d - Represents the day of the month (01 to 31)
		m - Represents a month (01 to 12)
		Y - Represents a year (in four digits)
		l (lowercase 'L') - Represents the day of the week
		*/
		
		echo "Today is " .  date("d/m/y") ."<br>";
		echo "Today is " . date("d.m.y") ."<br>"; 
		echo "Today is " . date("d-m-y") ."<br>"; 
		echo "Today is " . date("l") ."<br>";
		
		/*
		h - 12-hour format of an hour with leading zeros (01 to 12)
		i - Minutes with leading zeros (00 to 59)
		s - Seconds with leading zeros (00 to 59)
		a - Lowercase Ante meridiem and Post meridiem (am or pm)
		*/
		
		echo "Time is " . date("h:i:sa")
	?>

 
</body>
</html>