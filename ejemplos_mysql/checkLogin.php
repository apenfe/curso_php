<?php

if (!isset($_POST["username"]) || strlen($_POST["username"]) == 0) {
    header("Location: login.php");
    die();
}

if (!isset($_POST["password"]) || strlen($_POST["password"]) == 0) {
    header("Location: login.php");
    die();
}

session_start();

$user = $_POST["username"];
$pass = $_POST["password"];

$servername = "172.16.16.100";
$username = "root";
$password = "david";
$dbname = "supuesto8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Usuario WHERE username = '".$user."' AND password = MD5('".$pass."')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $_SESSION["logged"] = 1;
    $_SESSION["username"] =$user;
    header("Location: index.php");
    die();

} else {
    header("Location: login.php?login=error");
    die();
}

?>