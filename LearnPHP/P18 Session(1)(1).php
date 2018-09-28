<!DOCTYPE html>


<?php
/*
Calling Session values which are Present in Prev Page
*/
 
session_start();

?>
<html>
<body>

<?php

echo "Session name in Prev Page is " . $_SESSION["myName"] ."<br>"; // if you can modify the session value so override the value in Prev Page
echo "Session color in Prev Page is " .$_SESSION["favCol"] ."<br>";

// Also Print Like that

print_r($_SESSION);

?>


</body>
</html>