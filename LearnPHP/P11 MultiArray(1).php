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
			);
			
			echo $cars[0][0] . $cars[0][1] . " In Stock and " . $cars[0][2] . " Sold Out <br>";
			echo $cars[1][0] . $cars[1][1] . " In Stock and " . $cars[1][2] . " Sold Out <br>" ;
			echo $cars[2][0] . $cars[2][1] . " In Stock and " . $cars[2][2] . " Sold Out <br>";
	?>

 
</body>
</html>