<?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Write data to the file
file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file");
    
echo "Data written to the file successfully";

/*
If the file specified in the file_put_contents() already exists, it will overwirte it by default. If you would like to preserve the file's contents you can pass the special FILE_APPEND flag as a third parameter to the file_put_contents() function. I will simply append the new data to the file instead of overwitting it. Here's an example:

*/
?>