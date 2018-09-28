<?php
$str = intval($_GET["f"]); // convert into int


$conn = new mysqli("localhost","root","" , "mydb");

if($conn->connect_error)
{
	echo "Error: " . $conn->error;
}
else{
	echo "";
}
$sql = "select * from kiru2 where id ='".$str."'";
$res = $conn->query($sql);
$row  = $res->fetch_assoc();

echo "<table border='1'>";
echo "<tr>";
echo "<td> Id </td>";
echo "<td> Name </td>";
echo "<td> FName </td>";
echo "<td> Gender </td>";
echo "<td> Language </td>";
echo "<td> Country </td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['fName'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['language'] . "</td>";
echo "<td>" . $row['Country'] . "</td>";
echo "</tr>";
echo "</table>";
?>