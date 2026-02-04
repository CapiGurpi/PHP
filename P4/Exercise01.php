<?php
$numero1 = 10;
$numero2 = 20;
$numero3 = 30;
$numeros = [$numero1,$numero2,$numero3];

echo "Current array: ";
print_r($numeros);

if (isset($_POST["position"]) && isset($_POST["numero1"])) {
    $pos = (int)$_POST["position"];
    $nuevo = (int)$_POST["numero1"];

    $numeros[$pos] = $nuevo;
}

?>
<h2>Modify array saved in session</h2>
<form action="Exercise01.php" method="post" enctype="multipart/form-data">
    Position to modify:
    <select name="position">
        <option value="">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br><br>


    <form method="get">
        New value:<br> <input type="int" name="numero1"><br>
        <input type="submit" value="Submit">
    </form>

    <form method = "get">
        <input type="submit" value="Modify"> <input type="submit" value="Average">  <input type="reset" value="Reset">
    </form>

    



