<?php 

include('connection.php'); 

$result = $conn->query("SELECT * FROM kiru2 where name LIKE '%".$_POST["name"]."%'");

foreach($result as $key) // get table data through for each loop
{
    

?>
<div>
    <h2><?php echo $key['name'] ?></h2> 
    <p><?php echo $key['fName'] ?></p>
   
    
</div>
<?php 

}

 //if we have image in Database so fetch and display like this
    /*<img src="<?php echo $key[image] ?>" id="pic"> */
?>