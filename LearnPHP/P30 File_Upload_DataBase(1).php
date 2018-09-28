<?php 

if(isset($_POST['upload']))
{
    $target = "uploads/" . basename($_FILES['image']['name']);
    
    // Create Connection
    $conn = new mysqli("localhost","root","","mydb");
    
    //get Form Data
    $images = $_FILES['image']['name'];
    $text = $_POST['text'];
    
    //Insert into tabel
    $conn->query("insert into image (Img , Text) values('$images' ,'$text')");
    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
        echo "File Uplaoded";
    }
    else
    {
        echo "File Not Uploaded"
;    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jquary and PHP , AJAX Live Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #img_div {border: 2px solid red ; width: 120px ; text-align: center}
    </style>
</head>
<body>

<div class="container" >
    <h2>File Upload in DataBase</h2>
    
    <?php 
        $conn = new mysqli("localhost", "root", "", "mydb");
        $result = $conn->query("SELECT * FROM image");
 
   while($row = $result->fetch_assoc())
   {
     echo "<div id='img_div' >";
     echo "<img src='uploads/" .$row['Img']. "' height='100' width='100'>";       
     echo "<p>" .$row['Text']. "</p>";     
     echo "</div>";     
   }
    
    ?>
    
    <form method="post" action="P30 File_Upload_DataBase(1).php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="form-group">
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <textarea name="text" cols="10" rows="4" placeholder="Say something about imgae"> </textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="upload" value="upload">
        </div>
    </form>
</div>
    
   
</body>
</html>
