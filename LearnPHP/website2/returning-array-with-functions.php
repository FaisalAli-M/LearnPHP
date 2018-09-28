<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Returning Array with Functions</title>
</head>
<body>

<?php
// Defining function
function divideNumbers($dividend, $divisor){
    $quotient = $dividend / $divisor;
    $array = array($dividend, $divisor, $quotient);
    return $array;
}

// Assign variables as if they were an array
list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
echo $dividend . "<br>";  // Outputs: 10
echo $divisor  . "<br>";   // Outputs: 2
echo $quotient . "<br>";  // Outputs: 5
?>

</body>
</html>