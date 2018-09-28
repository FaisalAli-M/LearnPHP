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
		
		/*
		Create a Date From a String With PHP strtotime()
		The PHP strtotime() function is used to convert a human readable string to a Unix time.
		*/
		
		$startdate = strtotime("Sunday");
		$enddate = strtotime("+6 weeks");
		
		while($startdate < $enddate)
		{
			echo date("M-d", $startdate) ."<br>";
			$startdate = strtotime("+1 weeks",$startdate);
		}
		
		
		
	?>

 
</body>
</html>