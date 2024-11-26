<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <h1 class="text-center mb-4">Tambah Produk</h1>

        <!-- Navigation -->
        <div class="d-flex justify-content-end">
            <a href="show.php" class="btn btn-primary mb-4">Lihat Data Produk</a>
        </div>

        <!-- Form Card -->
        <div class="card shadow p-4">
            <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Input nama produk" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga Produk</label>
                    <input type="number" id="price" name="price" class="form-control" placeholder="Input harga produk" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-50" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
