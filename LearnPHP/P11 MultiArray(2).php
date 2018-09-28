<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	

	<?php
			$cars = array(
				array("Toyota",22,3),
				array("Civic",2,13),
				array("Honda",12,3),
				array("Prado",12,3),
			);
			// first loop for rows
			for($x = 0 ; $x <= 3 ; $x++)
			{
				echo "In " . $x . "Row has <br>";
				echo "<ul>" ;
				// loop for columns
				for($y=0 ; $y<=2 ; $y++)
				{
					echo "<li>" . $cars[$x][$y] ."</li>" ;
				}
				echo "</ul>";
			}
			echo "Another method <br>";
				// first loop for rows
			for($a = 0 ; $a <= 3 ; $a++)
			{
				echo "In " . $a . " Row has <br>";
				
				// loop for columns
				for($b=0 ; $b<=2 ; $b++)
				{
					echo  $cars[$a][$b] . "<br>"  ;
				}
				
			}
	?>

 
</body>
</html>