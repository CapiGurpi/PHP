<!DOCTYPE html>
<html>

<body>
    <h2>Lista de menor a mayor</h2>

    <?php
    $numero1 =0;
    $numero2 =0;
    $numero3 =0;
    if (isset($_GET['numero2'])) {
        $numero1 = htmlspecialchars($_GET['numero1']);
        $numero2 = htmlspecialchars($_GET['numero2']);
        $numero3 = $numero1;
    }
    while ($numero1 <= $numero2 & $numero1 !=0 & $numero2 !=0 & $numero1>-1 & $numero2<21) {
        echo "<font color='blue'>· $numero1</font><br>";
        $numero1++;
    
    }
    
    ?>
    <h2>Lista de mayor a menor</h2>
    <?php
    while ($numero2 >= $numero3 & $numero3 !=0 & $numero2 !=0 & $numero3>-1 & $numero2<21){
        echo "<font color='red'>· $numero2</font><br>";
        $numero2--;
    }if ($numero3 <-1 | $numero3 > 20 | $numero2 <-1 | $numero2 > 20) {
        echo "<h2 style='color:red;'>ERROR</h2>";
        echo "Los números establecidos no concuerdan con el límite establecido, porfavor introduzca números menores que 20 y mayores que 0." ."<br>";
    }
    ?>

    <h2>Introduce Números Entre 0 y 20</h2>
    <form method="get">
        Número 1:<br> <input type="int" name="numero1"><br>
        Número 2:<br> <input type="int" name="numero2">
        <input type="submit" value="Submit">

    
    </form>


</body>

</html>