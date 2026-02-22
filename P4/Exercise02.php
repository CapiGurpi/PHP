<!DOCTYPE html>
<?php
session_start();
?>
<html>
<body>
<h1>Gestionar leche y refresco</h1>

<form action="Exercise02.php" method="post" enctype="multipart/form-data">
    Nombre del producto <del></del> trabajador <input type="String" name="nombre"> <br> <br>
    <select name="opciones">
        <option value="">-- Selecciona --</option>
        <option value="Leche">Leche</option>
        <option value="Refresco">Refresco</option>
</select><br><br>


    
  Cantidad de producto <input type="int" name="valor"> <br> <br>
   <input type="submit" name = "accion" value="Añadir">
    <input type="submit" name = "accion"  value="Quitar">
     <input type="reset" name = "accion"  value="Reiniciar">
</form>
<br> <br>
<?php
if (!isset($_POST['accion'])) {

    $_SESSION["Leche"] = 0;
    $_SESSION["Refresco"] = 0;
}

if (isset($_POST['accion'])) {
    $_SESSION["Nombre"]= $_POST["nombre"]; 
 echo "Nombre de trabajador ", $_SESSION["Nombre"];
 echo "<br>";
echo "<br>"; 

 switch ($_POST['accion']) {
        case 'Añadir':
             switch ($_POST['opciones']) {
        case 'Leche':
        $_SESSION["Leche"]= $_SESSION["Leche"] + $_POST["valor"];
            
            break;

        case 'Refresco':
          $_SESSION["Refresco"]= $_SESSION["Refresco"] + $_POST["valor"];  

            break;
        
    }
            
           
            
            break;

        case 'Quitar':
         switch ($_POST['opciones']) {
        case 'Leche':
        $_SESSION["Leche"]= $_SESSION["Leche"] - $_POST["valor"];
            
            break;

        case 'Refresco':
          $_SESSION["Refresco"]= $_SESSION["Refresco"] - $_POST["valor"];  

            break;
        
    }
            




                break;


        
    }


}

echo "Leche: ", $_SESSION["Leche"];
 echo "<br>";
echo "<br>"; 
 echo "Refresco ", $_SESSION["Refresco"];
?>
</body>


