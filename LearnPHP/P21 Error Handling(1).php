<!DOCTYPE html>
<html>
<body>

<?php
/*
Basic Error Handling: Using the die() function

*/
if(!file_exists("notFile.php"))
{
	die("File not found");
}
else
{
	echo "file Found";
}

/*
if we use instaed of die method  
<?php
$file=fopen("welcome.txt","r");
?>
so error will be:

Warning: fopen(welcome.txt) [function.fopen]: failed to open stream:
No such file or directory in C:\webfolder\test.php on line 2
*/
?>

</body>
</html>