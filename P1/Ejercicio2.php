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

$Monday = 1;
$Tuesday = 2;
$Wednesday = 3;
$Thursday = 4;
$Friday = 5;
$Saturday = 6;
$Sunday = 7;

$dayofweek = "";

switch ($dayofweek) {
    case "1":
        # code...
        echo "This is Monday". "<br>";
        break;

    case "2":
        echo "This is Tuesday" . "<br>";
        break;

    case "3":
        echo "This is Wednesday"."<br>";
        break;

    case "4":
        echo "This is Thursday"."<br>";
        break;

    case "5":
        echo "This is Friday"."<br>";
        break;

    case "6":
        echo "This is Saturday"."<br>";
        break;

    case "7":
        echo "This is Sunday"."<br>";
        break;

    
    default:
        echo "The value not corresponding with any day"."<br>";
        # code...
        break;
}


