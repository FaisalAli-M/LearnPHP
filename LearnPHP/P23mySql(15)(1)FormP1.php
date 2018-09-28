


<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "mydb";

$conn = new mysqli($server , $user , $pass , $db);
if($conn->connect_error)
{
	echo "Connection Failed " . $conn->error ;
}
else
{
	echo "Connection Sucessfully Connected "; 
}
$n = $_POST['naam'];

$ins = "select * from kiru2 where id='" . $n . "'";

$res = $conn->query($ins);

$row = $res->fetch_assoc(); // it store only Aplabets
	
	//Create array for languages
	$arrlang = array("Urdu","Sindhi","Pashto","Panjabi","English");
	// Select Country name from country table
	$coun = "select * from country";
	$res = $conn->query($coun);


?>
<form method="post" action="P23mySql(15)(1)FormP2.php">
		<input type="hidden" name="id" value="<?php echo $row['id'];  ?>" />
Name : <input type="text" name="name" value="<?php echo $row['name'];  ?>"/> <br><br>
FName : <input type="text" name="fName" value="<?php echo $row['fName'];  ?>"/> <br><br>
Gender: <?php
	if($row['Gender']=="Male")
	{
		echo "<input type='radio' name='gender' value='Male' Checked > Male </input>";
	}
	else
	{
		echo "<input type='radio' name='gender' value='Male' > Male </input>";
	}
		if($row['Gender'] == "Female")
	{
		echo "<input type='radio' name='gender' value='Female' Checked > Female </input>";
	}
	else
	{
		echo "<input type='radio' name='gender' value='Female' > Female </input>";
	}
	echo "<br>";
?>
Languages
<?php
$db_lang = explode(",",$row['language']); //The explode function is used to "Split a string by a specified string into pieces i.e. it breaks a string into an array". The explode function in PHP allows us to break a string into smaller text with each break occurring at the same symbol. This symbol is known as the delimiter. Using the explode command we will create an array from a string. The explode() function breaks a string into an array

foreach($arrlang as $lang)
{
	if(in_array($lang,$db_lang))
	{
		echo "<input type='checkbox' name='language[]' value='".$lang."' Checked>" .$lang;
	}
	else{
		echo "<input type='checkbox' name='language[]' value='".$lang."' >" .$lang;
	}
}
?>
<br><br>
Countries <select name="country">
<?php
 while($rowc = $res->fetch_assoc())
 {
	 if($rowc['country']==$row['Country'])
	 {
	 echo "<option value='".$rowc['country']."' selected >" . $rowc['country'] . "</option>";
	 }
	 else{
		 echo "<option value='".$rowc['country']."' >" . $rowc['country'] . "</option>";
	 }
 }
?>
</select>
<br>
<input type="submit" value="Save" name="submit">
</form>