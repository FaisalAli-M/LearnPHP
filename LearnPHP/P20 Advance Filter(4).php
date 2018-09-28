<!DOCTYPE html>
<html>
<body>

<?php
/*
The following example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:
*/
$titl = "<h1>hello faisal aliÆØÅ</h1>";
$PRINT = filter_var($titl, FILTER_SANITIZE_STRING , FILTER_FLAG_STRIP_HIGH);

echo $PRINT;

?>

</body>
</html>