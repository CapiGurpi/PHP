<?php

function tirarDado($veces, $caras) {
    $total = 0;
    for ($i = 0; $i < $veces; $i++) {
        $total += rand(1, $caras);
    }
    return $total;
}

$resultados = [];
$ganadas1 = $ganadas2 = $empates = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $jugador1 = $_POST["jugador1"];
    $objeto1  = $_POST["objeto1"];

    $jugador2 = $_POST["jugador2"];
    $objeto2  = $_POST["objeto2"];

}

    $rondas = intval($_POST["rondas"]);

    
    $objetos = [
        "sarten"   => [1, 8],
        "dorayaki" => [2, 4]
    ];

    
    for ($i = 1; $i <= $rondas; $i++) {

        $v1 = tirarDado($objetos[$objeto1][0], $objetos[$objeto1][1]);
        $v2 = tirarDado($objetos[$objeto2][0], $objetos[$objeto2][1]);

        if ($v1 > $v2) {
            $ganador = $jugador1;
            $ganadas1++;
        } elseif ($v2 > $v1) {
            $ganador = $jugador2;
            $ganadas2++;
        } else {
            $ganador = "Empate";
            $empates++;
        }

        $resultados[] = ["ronda" => $i, "v1" => $v1, "v2" => $v2, "ganador" => $ganador];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        select, input { padding: 5px; margin: 5px; }
        table { border-collapse: collapse; margin-top: 20px; }
        td, th { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
</head>
<body>

<h1>Ejercicio 7</h1>

<form method="post">
    <h2>Jugador 1</h2>
    Luchador:
    <select name="jugador1" required>
        <option value="">-- Escoge el jugador --</option>
        <option value="Doraemon">Doraemon</option>
        <option value="Nobita">Nobita</option>
    </select><br>

    Objeto:
    <select name="objeto1" required>
        <option value="">-- Elige el objeto --</option>
        <option value="sarten">Sartén (1d8)</option>
        <option value="dorayaki">Dorayaki (2d4)</option>
    </select>

    <h2>Jugador 2</h2>
    Luchador:
    <select name="jugador2" required>
        <option value="">-- Escoge el jugador --</option>
        <option value="Doraemon">Doraemon</option>
        <option value="Nobita">Nobita</option>
    </select><br>

    Objeto:
    <select name="objeto2" required>
        <option value="">-- Elige el objeto --</option>
        <option value="sarten">Sartén (1d8)</option>
        <option value="dorayaki">Dorayaki (2d4)</option>
    </select>

    <h3>Rondas (1-10):</h3>
    <input type="number" name="rondas" min="1" max="10" required>

    <br><br>
    <button type="submit">¡Luchar!</button>
</form>

<?php if (!empty($resultados)): ?>
    <h2>Resultados</h2>
    <table>
        <tr>
            <th>Ronda</th>
            <th><?= $jugador1 ?></th>
            <th><?= $jugador2 ?></th>
            <th>Ganador</th>
        </tr>

        <?php foreach ($resultados as $r): ?>
            <tr>
                <td><?= $r["ronda"] ?></td>
                <td><?= $r["v1"] ?></td>
                <td><?= $r["v2"] ?></td>
                <td><?= $r["ganador"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Ganador Final</h2>
    <?php
    if ($ganadas1 > $ganadas2) {
        echo "<p> Ha ganado $jugador1</p>";
    } elseif ($ganadas2 > $ganadas1) {
        echo "<p> Ha ganado $jugador2</p>";
    } else {
        echo "<p> Empate total</p>";
    }
    ?>
<?php endif; ?>

</body>
</html>

