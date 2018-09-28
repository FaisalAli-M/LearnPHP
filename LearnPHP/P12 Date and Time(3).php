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
		
		/*
		h - 12-hour format of an hour with leading zeros (01 to 12)
		i - Minutes with leading zeros (00 to 59)
		s - Seconds with leading zeros (00 to 59)
		a - Lowercase Ante meridiem and Post meridiem (am or pm)
		*/
		
		echo "Time is " . date("h:i:sa") ."<br>";
		// Get Your Time Zone
		//date(format,timestamp)
		// mktime(hour,minute,second,month,day,year)
		// Create Your Own Time
		$d= mktime(2,13,40,11,28,2017);
		echo "Created Time is ". date("d-m-y , h:i:sa" , $d);

		
	?>

 
</body>
</html>