<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <h1 class="text-center mb-4">Register</h1>

        <!-- Form Wrapper -->
        <div class="card shadow p-4 w-50 mx-auto">
            <form action="./backend/register.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
                </div>
                <div class="mb-3">
                    <label for="confirm" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Masukkan konfirmasi password Anda" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success w-100">Register</button>
                </div>
                <div class="text-center mt-3">
                    <span>Sudah punya akun? <a href="index.php" class="text-decoration-none">Login</a></span>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
