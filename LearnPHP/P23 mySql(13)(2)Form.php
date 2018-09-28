<!DOCTYPE html>
<html>
<body>
<h3> Delete Data Using Query String and Get Method Action Perform Dynamicaly</h3>




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


if(isset($_GET['id']))
{
	$selet = "delete from kiru where id=".$_GET['id'];
	if(!$conn->query($selet))
	{
		echo $conn->error;
	}
}



// SELECT ALL REmaining Data
$selet = "select * from kiru"; // here you can write the name of specific coloum or id and...
$res = $conn->query($selet);

if($res->num_rows > 0)
{
	echo "<table border='1'>";
	echo "<tr>";
		echo "<td> Id </td>";
		echo "<td> Name </td>";
		echo "<td> F-Name </td>";
		echo "<td> Reg-Date </td>";
	echo "</tr>";
	// output row data use loop to fetch all rows beacuse without use loop only 1st row will display
	while($row = $res->fetch_assoc())
	{
		
		echo "<tr>";
			echo " <td>" . $row['id'] . "</td>";
			echo " <td>" . $row['name'] . "</td>";
			echo " <td>" . $row['fName'] . "</td>";
			echo " <td>" . $row['reg_date'] . "</td>";
			echo " <td> <a href='P23%20mySql(13)(2)Form.php?id=".$row['id']."'>Delete </a></td>";
		echo "</tr>";
	}
	echo "</table>";
	
}
else {
		echo "Data not Found";
	}

?>


</body>
</html>