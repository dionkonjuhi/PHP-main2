<?php
$servername = "localhost";
$username = "root"; // ndrysho nëse ke user tjetër
$password = "";
$database = "db8";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}
?>
