<!DOCTYPE html>
<html>

<body>
    <h2>HTML Forms</h2>

    <?php
    if (isset($_GET['numero2'])) {
        $numero1 = htmlspecialchars($_GET['numero1']);
        $numero2 = htmlspecialchars($_GET['numero2']);
        if ($numero1 > $numero2) {
            # code...
            echo "El número más grande es" . " " . $numero1 . "<br>";
        }
        if ($numero2 > $numero1) {
            # code...
            echo "El número más grande es" . " " . $numero2 . "<br>";
        }
        if ($numero1 == $numero2) {
            # code...
            echo "El número" . " " . $numero1 . " " . " es igual que el número" . " " . $numero2 . "<br>";
        }
    }
    ?>

    <h2>Introduce números</h2>
    <form method="get">
        Numero 1:<br> <input type="int" name="numero1"><br>
        Numero 2:<br> <input type="int" name="numero2">
        <input type="submit" value="Submit">
    </form>


</body>

</html>