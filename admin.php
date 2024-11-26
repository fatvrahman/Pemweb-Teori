<?php 
session_start();

// Cek apakah session role sudah di-set
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Card wrapper -->
        <div class="card shadow-lg p-4 rounded">
            <h3 class="text-center mb-3">Selamat Datang Administrator</h3>
            <h5 class="text-center text-secondary">Halo, <span class="text-primary"><?= htmlspecialchars($_SESSION['name']); ?></span>!</h5>

            <!-- Action buttons -->
            <div class="d-flex justify-content-center mt-4">
                <a href="show.php" class="btn btn-primary btn-lg mx-2">Lihat Data Produk</a>
                <a href="create.php" class="btn btn-success btn-lg mx-2">Tambah Produk</a>
            </div>

            <!-- Logout button -->
            <div class="text-center mt-4">
                <a href="./backend/logout.php" class="btn btn-danger btn-lg">Logout</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

