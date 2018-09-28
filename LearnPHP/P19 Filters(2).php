<!DOCTYPE html>
<html>
<head>
</head>
<body>

  <?php
  /*
	The filter_var() function both validate and sanitize data.

	The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

	The variable you want to check
	The type of check to use
	
	
	Sanitize a String
	The following example uses the filter_var() function to remove all HTML tags from a string:
  */
	$str = "<h1>Name is Faisal</h1>";
	$newstr = filter_var($str , FILTER_SANITIZE_STRING);
	echo $newstr;
	
  ?>


</body>
</html>