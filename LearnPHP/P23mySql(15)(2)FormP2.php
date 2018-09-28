<?php

$id = $_GET["id"];
$host = "localhost";
$user = "root";
$pass = "";
$db = "mydb";

$conn = new mysqli($host , $user , $pass , $db);
if($conn->connect_error)
{
	echo $conn->error;
}
else
{
	echo "Connection Sucessfully <br> <br>";
}
$sql = "select * from kiru2 where id='".$id."'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

//For Country Table
$Country = "Select * from country";
$res = $conn->query($Country);


$language = Array("Urdu","Pashto","Sindhi","English","Panjabi");
?>
<form method="post" action="P23mySql(15)(2)FormP3.php">
<input type="hidden" name="id" value="<?php echo $row['id'];  ?>" />
Name: <input type="text" name="name" value="<?php echo $row['name'] ?>"/> <br>
F-Name: <input type="text" name="fName" value="<?php echo $row['fName'] ?>"/><br>
Gender:
<?php
if($row['Gender']=="Male")
{
	echo "<input type='radio' name='gender' value='Male' checked> Male</input> ";
}
else{
	echo "<input type='radio' name='gender' value='Male' > Male</input> ";
}
if($row['Gender']=="Female")
{
	echo "<input type='radio' name='gender' value='Female' checked> Female</input> <br> ";
}
else{
	echo "<input type='radio' name='gender' value='Female' > Female</input> <br>";
}
 ?>
 Language:
 <?php
 $db_lang = explode(",",$row['language']);
 foreach($language as $lang)
 {
	 if(in_array($lang,$db_lang))
	 {
	 echo "<input type='Checkbox' name='language[] 'value='".$lang."' checked> $lang </input> ";
	 }
	 else{
		echo "<input type='Checkbox' name='language[] value=''".$lang."'> $lang </input>"; 
	 }
 }
 ?>
<br> Country:
 <?php
	echo "<select name='Country'>";
	while($rowc = $res->fetch_assoc())
	{
		if($row['Country']==$rowc['country'])
		{
			echo "<option value='".$rowc['country']."'  selected>" .$rowc['country'] . "</option>";
		}
		else{
			echo "<option value='".$rowc['country']."'  >" . $rowc['country']. "</option>";
		}
	}
	echo "</select>"
 ?>

<br>
<input type="submit" value="Save" name="submit">
 </form>
 
 
 