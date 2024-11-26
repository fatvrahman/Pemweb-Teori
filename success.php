<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Berhasil Ditambahkan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .success-container {
            max-width: 600px;
            margin: auto;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .btn-success, .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="success-container text-center">
            <h1 class="text-success mb-3">Produk Berhasil Ditambahkan!</h1>
            <p class="mt-3">Produk <strong><?= htmlspecialchars($_GET['name']); ?></strong> telah berhasil ditambahkan ke dalam database.</p>
            <div class="mt-4">
                <a href="create.php" class="btn btn-success mx-2">Tambah Produk Lain</a>
                <a href="show.php" class="btn btn-primary mx-2">Lihat Data Produk</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

