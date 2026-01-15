<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $allowedExtension = $_POST["extension"] ?? "";
    $maxSize = $_POST["maxSize"] ?? "";

    
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {

        $target_dir = "upload/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        
        if ($fileType != $allowedExtension) {
            echo "Lo sentimos, el archivo solo permite formatos png,jpg,pdf.<br>";
            $uploadOk = 0;
        }

        
        if ($_FILES["fileToUpload"]["size"] > 1000000000000) {
            echo "Lo sentimos, el archivo pesa demasiado.<br>";
            $uploadOk = 0;
        }

        
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "El archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "ha sido subido correctamente.<br>";
            } else {
                echo "Lo sentimos, hubo un error al subir el archivo.<br>";
            }
        }
    } else {
        echo "Porfavor, seleccione un archivo.<br>";
    }
}
?>

<h2>Subir un archivo</h2>

<form action="Ejercicio6.php" method="post" enctype="multipart/form-data">
    Archivo: <input type="file" name="fileToUpload"><br><br>
    Extensión:
    <select name="extension">
        <option value="">-- Selecciona --</option>
        <option value="jpg">jpg</option>
        <option value="png">png</option>
        <option value="pdf">pdf</option>
    </select><br><br>
    Tamaño MAX : <input type="number" name="maxSize" placeholder="Ej: 1000000000000"><br><br>
    <input type="submit" value="UPLOAD">
</form>
