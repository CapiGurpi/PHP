<!-- page1.php -->
<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html>
<head>
    <title>With Sessions</title>
</head>
<body>
    <form action="14_Sessions2.php" method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php
session_start(); // Resume the session
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store the user input in the session
    $_SESSION['name'] = $_POST['name'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>With Sessions</title>
</head>

<body>
    <?php
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        echo "<h1>Welcome back, $name!</h1>";
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
    } else {
        echo "<h1>No session data found!</h1>";
    }
    ?>
</body>

</html>