<!DOCTYPE html>


<?php
/*
A session is a way to store information (in variables) to be used across multiple pages.
By default, session variables last until the user closes the browser.
 session is started with the session_start() function.

Session variables are set with the PHP global variable: $_SESSION.
The session_start() function must be the very first thing in your document. Before any HTML tags.
*/
 
session_start();

?>
<html>
<body>

<?php
$_SESSION["myName"] = "Faisal";
$_SESSION["favCol"] = "Green";
echo "Session is set";

// Calling Session variable values in next page


?>


</body>
</html>