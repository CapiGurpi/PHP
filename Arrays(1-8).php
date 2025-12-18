<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //EJERCICIO 1
    echo "<h2> Ejercicio 1 </h2><br>";
        $datos = array("nombre"=>"Sara", "apellido"=>"Martinez", "edad"=>"23", "ciudad"=>"Barcelona");

        $counter = 1;
        foreach ($datos as $value){
                echo "dato" . $counter . "º: " . $value . "<br>";
                $counter++;
        }
        echo "---------------------------------------------------------------------------------" . "<br>";
    //EJERCICIO 2
    echo "<h2> Ejercicio 2 </h2><br>";
        $counter = 1;
        foreach ($datos as $key => $value){
            echo  $key . ": "  . $value . "<br>";
        }
        echo "---------------------------------------------------------------------------------". "<br>";
    //EJERCICIO 3 
    echo "<h2> Ejercicio 3 </h2><br>";
        $counter = 1;
        $datos["edad"]=24;
        foreach ($datos as $value){
                echo "dato" . $counter . "º: " . $value . "<br>";
                $counter++;       
        }
        echo "---------------------------------------------------------------------------------". "<br>";
    //EJERCICIO 4
    echo "<h2> Ejercicio 4 </h2><br>";    
        unset($datos["ciudad"]);
        var_dump($datos);
        echo "<br>";
        echo "---------------------------------------------------------------------------------". "<br>";
    //EJERCICIO 5
    echo "<h2> Ejercicio 5 </h2><br>";
        $numero = 5;
        $str = "a,b,c,d,e,f";
        $lista =explode("," ,$str);
        for ($i=5; $i >=0;$i--){
            echo "Letter " . ($i + 1), "º: ". $lista[$i]. "<br>";
        }
        echo "---------------------------------------------------------------------------------". "<br>";
    //EJERCICIO 6
    echo "<h2> Ejercicio 6 </h2><br>";
    $notas = array("Miguel"=> 5, "Marta"=> 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1, "Luís" => 7);
    arsort($notas);
    foreach ($notas as $x => $y) {
        echo "$x: $y <br>";
    }
    echo "---------------------------------------------------------------------------------". "<br>";
    //EJERCICIO 7
    echo "<h2> Ejercicio 7 </h2><br>";
    $f = 0;
    $suma = 0;
    foreach($notas as $x => $y){
        $suma = $suma + $notas[$x];
        $f++;
    }
    $media = ($suma/$f);
    echo "La media de la clase es ". $media."<br>";
    echo "Alumnos por encima de la media <br>";
    foreach($notas as $x => $y){
        if($y>$media){
            echo $x. "<br>";
        }
    }
    echo "---------------------------------------------------------------------------------". "<br>";
    //EJERCICIO 8
    echo "<h2> Ejercicio 8 </h2><br>";
    $alta = 0;
    $estudiante;
    foreach ($notas as $x => $y) {
      if($alta<$y){
        $alta=$y;
        $estudiante= $x;
      }
    }
    echo "La nota mas alta es $alta y el mejor alumno es $estudiante <br>";
    
    ?>
</body>
</html>