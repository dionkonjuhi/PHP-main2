<?php
include 'db8.php';
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Kërkim + Filtrim
$where = "1=1";
$search = "";
if (!empty($_GET['q'])) {
    $search = $_GET['q'];
    $where .= " AND (title LIKE '%$search%' OR author LIKE '%$search%')";
}

if (!empty($_GET['year'])) {
    $year = $_GET['year'];
    $where .= " AND year = $year";
}

$result = $conn->query("SELECT * FROM books WHERE $where ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Menaxhimi i Librave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>📚 Librat</h2>
        <div>
            <a href="create.php" class="btn btn-primary">➕ Shto Libër</a>
            <a href="logout.php" class="btn btn-secondary">🚪 Dil</a>
        </div>
    </div>

    <!-- Kërkim -->
    <form method="GET" class="row g-2 mb-3">
        <div class="col-md-5">
            <input type="text" name="q" class="form-control" placeholder="Kërko sipas titullit ose autorit..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div class="col-md-3">
            <input type="number" name="year" class="form-control" placeholder="Filtrim sipas vitit">
        </div>
        <div class="col-md-2">
            <button class="btn btn-dark w-100">🔍 Kërko</button>
        </div>
    </form>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Foto</th>
                <th>Titulli</th>
                <th>Autori</th>
                <th>Viti</th>
                <th>Veprime</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><img src="uploads/<?= htmlspecialchars($row['cover']) ?>" width="60" height="80" style="object-fit:cover;"></td>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['author']) ?></td>
                <td><?= $row['year'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Fshije librin?')">🗑️</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
