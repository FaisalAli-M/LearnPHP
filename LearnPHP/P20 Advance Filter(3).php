<!DOCTYPE html>
<html>
<body>

<?php
/*
The following example uses the filter_var() function to check if the variable $url is a URL with a querystring:
*/
$url = "www.aafiamovement.com";
if(!filter_var($url , FILTER_VALIDATE_URL , FILTER_FLAG_QUERY_REQUIRED) === false)
{
	echo "Valid URL";
}
else
{
	echo "Invalid URL";
}

?>

</body>
</html>