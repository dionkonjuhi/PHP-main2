<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    // Merr të dhënat
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Kontrollo nëse janë bosh
    if (empty($name) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "You have not filled in all the fields.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else {
        // Hash password vetëm një herë
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Përgatisim query për regjistrim
        $sql = "INSERT INTO users (name, username, password) VALUES (:name, :username, :password)";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(':name', $name);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':password', $hashed_password);

        if ($insertSql->execute()) {
            header("Location: login.php");
            exit;
        } else {
            echo "Error: Unable to register user.";
        }
    }
}
?>
