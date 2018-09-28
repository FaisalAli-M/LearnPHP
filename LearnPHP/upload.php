<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);  // basename is a function which return file name
$uploadOk = 1;
$imageFileType = pathinfo($target_file , PATHINFO_EXTENSION); // get the File (PATHINFO_DIRNAME - return only dirname ) (PATHINFO_BASENAME - return only basename ) (PATHINFO_EXTENSION - return only extension)

// Check the image is real Image or Fake;

if(isset($_POST["submit"]))
{
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); // getimagesize return the height/width of an image if it is image or not an image so return "false" and Returns an array with 4 elements. 
	//Index 0 contains the width of the image in pixels. Index 1 contains the height. Index 2 is a flag indicating the type of the image. Index 3 return heigh and width both and [mime] return type og img
	if($check == true)
	{
		echo "file is an " . $check["mime"];
		$uploadOk = 1;
	}
	else{
		echo "fil is not an image";
		$uploadOk = 0;
	}
}

if(file_exists($target_file))
{
	echo "Your File Already Exits in the Folder";
	$uploadOk = 0;
}

// check the size of image;
if($_FILES["fileToUpload"]["size"]  > 500000)
{
	echo "Your File is Too Large";
	$uploadOk = 0;
}
// Set the File Formate
if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif")
{
	echo "File has Invalid Formate";
	$uploadOk = 0;
}
// Now Check uploadOk value to move the file Temporary Server to Server
if($uploadOk == 1)
{
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $target_file);
	echo " the File " . basename($_FILES["fileToUpload"]["name"]) . " has been Uploaded ";
}
else{
	echo " Sorry Error in Uploading ";
}


?>