<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a.text-primary {
            text-decoration: none;
        }

        a.text-primary:hover {
            text-decoration: none; /* Tetap tanpa garis bawah saat di-hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <h1 class="text-center mb-4">Login</h1>

        <!-- Form -->
        <form action="./backend/login.php" method="post" class="w-50 mx-auto shadow p-4 rounded">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-success w-100">Login</button>
            </div>
            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="./register.php" class="text-primary">Daftar</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
