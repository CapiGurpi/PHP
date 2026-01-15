<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
// PHP code goes here
// Declare dos variables
    $num1 = 5; //php
    $num2 = 4; //php


    //logic
    $resultSum = $num1  + $num2;
    $resultsum2 = $num1 - $num2;
    $resultSum3 = $num1 * $num2;
    $resultSum4 = $num1 / $num2;
    $resultsum5 = ($num1 + $num2)/2;
    
    echo "The numbers are " . $num1 . " and " . $num2;
    echo "The sum of " . $num1 . " + " . $num2 . " = " . $resultSum . "<br>";
    echo "The susbtraction of " . $num1 . " - " . $num2 . " = " . $resultsum2 . "<br>";
    echo "The mul of " . $num1 . " * " . $num2 . " = " . $resultSum3 . "<br>";
    echo "The division of " . $num1 . " / " . $num2 . " = " . $resultSum4 . "<br>";



    if ($num1 > $num2) {
        # code...
        echo "The number " . $num1 . " is greater than " . $num2;
    }else if($num1 < $num2) {
        # code...
        echo "The number " . $num2 . " is greater than " . $num1. "<br>";
        # code...
    }else if ($num1 == $num2) {
        # code...
        echo "The number " . $num2 . " is equal to " . $num1. "<br>";

    }
    "<br>";
    if (($num1 >= 1) && $num2 >= 1) {
        # code...
        echo "The triangle area is " . $resultsum5 . "<br>";
    }

?>
</body>
</html>