<!DOCTYPE html>
<html>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading the file.";
    }
  }
  ?>
  <h2>Subir un archivo</h2>

  <form action="Ejercicio4.php" method="post" enctype="multipart/form-data">
    Archivo:<br><br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="Upload Image" name="submit"><br>

  </form>
</body>

</html>