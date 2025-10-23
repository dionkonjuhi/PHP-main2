<?php include 'config.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8">
  <title>Ndrysho përdoruesin</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="p-4">
  <div class="container">
    <h2 class="mb-4">Ndrysho përdoruesin</h2>
    <form method="POST">
      <div class="mb-3">
        <label>Emri</label>
        <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Ruaj ndryshimet</button>
      <a href="index.php" class="btn btn-secondary">Anulo</a>
    </form>
  </div>
</body>
</html>
