<?php include 'config.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
  if ($conn->query($sql)) {
    header("Location: index.php");
    exit;
  } else {
    echo "Gabim: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8">
  <title>Shto përdorues</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="p-4">
  <div class="container">
    <h2 class="mb-4">Shto përdorues të ri</h2>
    <form method="POST">
      <div class="mb-3">
        <label>Emri</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Ruaj</button>
      <a href="index.php" class="btn btn-secondary">Kthehu</a>
    </form>
  </div>
</body>
</html>
