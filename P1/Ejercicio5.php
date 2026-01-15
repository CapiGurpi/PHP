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


$numero1 = 0;
$numero2 =0;
$cuentap = 0;
$cuentai =0;
while ($numero2 < 100){
 $numero1 = rand(0,20);
 if ($numero1 % 2 ==0){
    $cuentap++;
 }
 else if ($numero1 % 2 != 0){
    $cuentai++;
 }
 echo $numero1 . ", ";
$numero2 = $numero2 + $numero1;

}
echo "<br>";
echo "The sum of numbers is ". $numero2;
echo "<br>";
echo "There were ". $cuentap. " even numbers";
echo "<br>";
echo "There were ". $cuentai. " odd numbers";


?>