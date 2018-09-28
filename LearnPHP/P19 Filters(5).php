<!DOCTYPE html>
<html>
<head>
</head>
<body>

  <?php
  /*
	
	
	Sanitize and Valid Email
	The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
  */
	$email = "faisal.ali.aptechnn@gmail.com>}";
	// Remove all illegal characters from email
	$email = filter_var($email , FILTER_SANITIZE_EMAIL);
	
	// Validate e-mail
	$vemail = filter_var($email , FILTER_VALIDATE_EMAIL);
	if(!$vemail === false)
	{
		echo "Valid Email Address";
	}
	else
	{
		echo "INValid Email Address";
	}
	
  ?>


</body>
</html>