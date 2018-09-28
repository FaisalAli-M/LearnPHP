<!DOCTYPE html>
<html>
<head>
</head>
<body>

  <?php
  /*
	Valid An Interger
	the following example uses the filter_var() function to check if the variable $int is an integer. If $int is an integer, the output of the code above will be: 
	"Integer is valid". If $int is not an integer, the output will be: "Integer is not valid":
  */
	$in = 1;
	$newin = filter_var($in , FILTER_VALIDATE_INT);
	if(!$newin === false)
	{
		echo "Valid";
	}
	else
	{
		echo "invalid";
	}
	// In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use 
	
	if($newin === 0 || !$newin === false)
	{
		echo "<br> Validate";
	}
	else
	{
		echo "<br> invalidate";
	}
	
  ?>


</body>
</html>