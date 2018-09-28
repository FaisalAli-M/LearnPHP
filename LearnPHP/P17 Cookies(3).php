<!DOCTYPE html>


<?php
/*
To delete a cookie, use the setcookie() function with an expiration date in the past:
*/
 
setcookie("user" , "Faisal" , time() + 3600 , "/"); 

?>
<html>
<body>

<?php

if(count($_COOKIE) > 0)
{
	echo "Cookie is Enabled";
}
else
{
	echo "Cookie is Disabled";
}
?>


</body>
</html>