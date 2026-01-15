<!DOCTYPE html>
<html>
<body>
<h2>HTML Forms</h2>

<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    $surname = htmlspecialchars($_GET['surname']);
    echo "<h3>Hello, $name . $surname!</h3>";
}
?>

<h2>Simple Greeting Form</h2>
<form method="get">
  Name: <input type="text" name="name">
  SurName: <input type="text" name="surname">
  <input type="submit" value="Submit">
</form>


</body>    
</html>
