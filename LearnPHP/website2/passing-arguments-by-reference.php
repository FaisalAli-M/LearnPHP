<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Passing Arguments by Reference</title>
</head>
<body>

<?php
    /*
    Passing Arguments to a Function by Reference
In PHP there are two ways you can pass arguments to a function: by value and by reference. By default, function arguments are passed by value so that if the value of the argument within the function is changed, it does not get affected outside of the function. However, to allow a function to modify its arguments, they must be passed by reference.
Passing an argument by reference is done by prepending an ampersand (&) to the argument name in the function definition, as shown in the example below:
    */
/* Defining a function that multiply a number
by itself and return the new value */
function selfMultiply(&$number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum . "<br>"; // Outputs: 5
 
selfMultiply($mynum);
echo $mynum . "<br>"; // Outputs: 25
?>

</body>
</html>