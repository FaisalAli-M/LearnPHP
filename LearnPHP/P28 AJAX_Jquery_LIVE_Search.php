<?php


$conn = new mysqli("localhost", "root", "", "mydb");
$result = $conn->query("SELECT * FROM kiru2 where name LIKE '%".$_POST["sear"]."%'");
$output = "";
if($result->num_rows > 0)
{
    $output .= '<table class="table table bordered">
                <tr><th>Id</th>
                    <th>Name</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                </tr>
                ';
   while($row = $result->fetch_assoc())
   {
      $output .= '<tr>
      <td>'. $row["id"] .'</td>
      <td>'. $row["name"] .'</td>
      <td>' .$row["fName"]. '</td>
      <td>' .$row["Gender"]. '</td>
      </tr>
      ';
         
         
         
   }
    echo $output;
}
else
{
    echo "Data not found";
}

?>