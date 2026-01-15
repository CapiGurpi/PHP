<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php

$num1 = 11; //php
$num2 = 15; //php

//Muestra la progresión numérica de los números pares desde 0 hasta el valor de la prin
//0,2,4,6,8,10

for ($i = 0; $i < $num1; $i ++) {
    # code...
    if ($i % 2 == 0) {
        # code...
        echo $i . " ,";
        //echo __LINE__ . "<br>"; //--> Esto sirve para que la web printee el número de la linea varias veces.
    }
}
echo "<br>";
while ($num2 >= 0) {
    # code...
    echo $num2 . ", ";
    $num2--;
}

//}
echo "<br>";
do {
    $num2 = 15;
    # code...
    echo $num1 . ", ";
    $num1++;
} while ($num1 <= $num2);
?>