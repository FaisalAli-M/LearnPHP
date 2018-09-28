<?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Write data to the file
file_put_contents($file, $data) or die("ERROR: Cannot write the file");
    
echo "Data written to the file successfully";

/*
An alternative way is using the file_put_contents() function. It is counterpart of file_get_contents() function and provides an easy method of writing the data to a file without needing to open it.
This function accepts the name and path to a file together with the data to be written to the file. Here's an example:

*/
?>