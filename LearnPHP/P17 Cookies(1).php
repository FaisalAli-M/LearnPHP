<!DOCTYPE html>


<?php
/*
setcookie(name, value, expire, path, domain, secure, http only);
Only the name parameter is required. All other parameters are optional.
*/
$cookie_name = "user";
$cookie_value = "Faisal"; // if you want to modify old cookie so just reset the value and cookie will be modify
setcookie($cookie_name , $cookie_value , time() + (86400 * 3) , "/"); //86400 = 1 day

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name]))
{
	echo "Cookie is not set";
}
else{
	echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


</body>
</html>