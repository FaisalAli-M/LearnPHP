<!DOCTYPE html>


<?php
/*
To delete a cookie, use the setcookie() function with an expiration date in the past:
*/
$cookie_name = "user";
$cookie_value = "Faisal"; 
setcookie($cookie_name , $cookie_value , time() - 3600 , "/"); //Expire the cookie

?>
<html>
<body>

<?php
echo " Cookie was expire";
?>


</body>
</html>