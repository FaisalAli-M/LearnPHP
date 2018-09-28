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
		
		$d = strtotime("2:40am 02 June 2017"); // strtotime is used to convert noraml string time into real time 
		echo "normal time to real time " . date("h:i:sa , y-m-d" , $d) . "<br>";
		
		$f = strtotime("tomorrow");
		echo "Tomorrow date and time will be " . date("h:i:sa , d-m-y" , $f) . "<br>";
		
		$k = strtotime("yesterday");
		echo "Yesterday date and time was " . date("h:i:sa , d-m-y" , $k) . "<br>";
		
		$a = strtotime("next Saturday");
		echo "Next saturday date and time will be " . date("h:i:sa , d-m-y" , $a) . "<br>";
		
		$b = strtotime("previous Saturday");
		echo "Previous saturday date and time Was " . date("h:i:sa , d-m-y" , $b) . "<br>";
		
		$m = strtotime("+3 months");
		echo "After 3 months date and time will be " . date("h:i:sa , d-m-y" , $m) . "<br>";
	?>

 
</body>
</html>