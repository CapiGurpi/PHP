<!DOCTYPE html>
<?php
session_start();
?>
<html>
<body>
<h1>Cambiar valores de un array</h1>
<form action="Exercise01.php" method="post" enctype="multipart/form-data">
    <select name="opciones">
        <option value="">-- Selecciona --</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
</select><br><br>
 
 
   
  Nuevo valor <input type="number" name="valor"> <br> <br>
   <input type="submit" name = "accion" value="Modificar">
    <input type="submit" name = "accion"  value="Media">
     <input type="reset" name = "accion"  value="Reiniciar">
</form>
<br> <br>
<?php
 
 
if (isset($_POST['opciones'])) {
    $Opcion = htmlspecialchars($_POST['opciones']);
}
if (!isset($_POST['accion'])) {
 
    $_SESSION["Array"] = array(1=>10, 2=>20, 3=> 30);
}
if (isset($_POST['accion'])) {
$valor = (int)$_POST['valor'];
   
    switch ($_POST['accion']) {
        case 'Modificar':
           
           
            $_SESSION["Array"][$Opcion]=$valor;
           
            break;
 
        case 'Media':
            $Media=0;
            foreach ($_SESSION["Array"] as $x) {
            $Media = $Media + $x;
 
                }
            echo "<br>";
           
            $Media = $Media / count($_SESSION["Array"]);
            echo "Current Average: ". $Media;
            echo "<br>";
            echo "<br>";
                break;
 
 
       
    }
}
foreach ($_SESSION["Array"] as $x) {
  echo $x," ";
 
}
echo "<br>";
echo "<br>";
 
 
?>
</body>
 
    



