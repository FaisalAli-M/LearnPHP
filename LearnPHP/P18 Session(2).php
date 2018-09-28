<!DOCTYPE html>


<?php
/*
To delete a cookie, use the setcookie() function with an expiration date in the past:
*/
 
session_start();

?>
<html>
<body>

<?php

// Remove All Session variables
session_unset();

// Destory Session
session_destroy();

?>


</body>
</html>