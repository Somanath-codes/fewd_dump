<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
    $password = isset($_GET['password']) ? htmlspecialchars($_GET['password']) : '';
    echo "<h2>Received via GET</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Password: $password</p>";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    echo "<h2>Received via POST</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Password: $password</p>";
} else {
    echo "<h2>Invalid Request</h2>";
}
?>
