<!DOCTYPE html>
<html>

<body>
<?php
    $numero1 =0;
    $numero2 =0;
    
    if (isset($_GET['numero2'])) {
        $numero1 = htmlspecialchars($_GET['numero1']);
        $numero2 = htmlspecialchars($_GET['numero2']);
        
    }
    if ($numero1 % 2 ==0 &&  $numero2 % 2 ==0) {
        echo $numero1 . " and " . $numero2 . " are even.<br>";
    }elseif ($numero1 % 2 != 0 && $numero2 % 2 !=0) {
        echo $numero1 . " and " . $numero2 ." are odd.<br>";
    }else if($numero1 % 2 ==0 && $numero2 %2 !=0){
        echo $numero1 . "is even and " . $numero2 ." is odd.<br>";
    }else if ($numero1 % 2 !=0 && $numero2 % 2 ==0) {
        echo $numero1 . "is odd and " . $numero2 ." is even.<br>";
    }
    while ($numero1 <= $numero2 & $numero2 !=0 & $numero1>-1 & $numero2<=15) {
        if ($numero1 % 2 ==0) {
            echo "<div><font color='green'>· $numero1</div></font><br>";
            $numero1++;
        }
        elseif ($numero1 % 2 != 0) {
            echo "<div><font color='darkorange'>· $numero1</div></font><br>";
            $numero1++;
        }
    }
    
    
?>
<?php
if (isset($_GET['nombre'])) {
    $nombre = htmlspecialchars($_GET['nombre']);
    echo "<h3>Hello, $nombre!</h3>";
}
?>
    <div>
    <h2>Datos personales</h2>
    <form method="get">
        Nombre:<br> <input type="string" name="nombre"><br>
        Número 1: <input type="int" name="numero1"><br>
        Numero 2: <input type="int" name="numero2">

        <input type="submit" value="Submit">

    
    </form>

    </div>
</body>

</html>