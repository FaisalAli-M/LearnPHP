<!DOCTYPE html>
<html>
<head>
</head>
<body>

  <?php
  /*
	
	
	Valid IP Address
	The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
  */
	$ip = "192.168.1.1";
	$newip = filter_var($ip , FILTER_VALIDATE_IP);
	if(!$newip === false)
	{
		echo "Valid ip Address";
	}
	else
	{
		echo "INValid ip Address";
	}
	
  ?>


</body>
</html>