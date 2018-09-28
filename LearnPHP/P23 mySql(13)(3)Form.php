<!DOCTYPE html>
<html>
<body>
<h3> Delete Multiple Data Using Check Box</h3>




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


if($_POST["submit"] == "DeleteSelected")
{
		$id = implode(",",$_POST['id']); // implode method is use to convert array value into string with Seperator which you want
	$selet = "delete from kiru where id in(".$id.")"; // in mysql query "in" is use to select or delete all things those who inside "in" braket like this id in(2,3,6,7) 
	if(!$conn->query($selet))
	{
		echo $conn->error;
	}
	

	
	echo "<pre>";
	print_r($_POST) ; // print_r is use to see the value of array index
	echo "</pre>";
	echo "Selected id for Delete were: " . $id;
}



// SELECT ALL REmaining Data
$selet = "select * from kiru"; // here you can write the name of specific coloum or id and...
$res = $conn->query($selet);

if($res->num_rows > 0)
{
	echo "<form method='post'>";
	echo "<table border='1'>";
	echo "<tr>";
		echo "<td> Id </td>";
		echo "<td> Name </td>";
		echo "<td> F-Name </td>";
		echo "<td> Reg-Date </td>";
		echo "<td> Delete </td>";
	echo "</tr>";
	// output row data use loop to fetch all rows beacuse without use loop only 1st row will display
	while($row = $res->fetch_assoc())
	{
		
		echo "<tr>";
			echo " <td>" . $row['id'] . "</td>";
			echo " <td>" . $row['name'] . "</td>";
			echo " <td>" . $row['fName'] . "</td>";
			echo " <td>" . $row['reg_date'] . "</td>";
			echo " <td> <input type='checkbox' name='id[]' value='".$row['id']."'/></td>"; // here i write Checkbox name like this name='id[]' because we want to take name as array 
		echo "</tr>";
	}
	echo "</table>";
	echo "<input type='submit' name='submit' value='DeleteSelected'>";
	echo "</form>";
	
}
else {
		echo "Data not Found";
	}

?>


</body>
</html>