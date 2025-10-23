<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8">
  <title>Lista e përdoruesve</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="p-4">
  <div class="container">
    <h2 class="mb-4">Lista e përdoruesve</h2>
    <a href="create.php" class="btn btn-primary mb-3">Shto përdorues</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Emri</th>
          <th>Email</th>
          <th>Data e krijimit</th>
          <th>Veprime</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['created_at']}</td>
                  <td>
                    <a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Ndrysho</a>
                    <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Fshi</a>
                  </td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</body>
</html>
