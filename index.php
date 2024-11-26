<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(120deg, #2c3e50, #f0f0f0);
        }
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #2c3e70;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #2c2e30;
        }

        /* Animasi input field */
        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .input, .button {
            animation: slide-in 0.6s ease-out;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="./backend/login.php" method="POST">
            <input type="email" name="email" id="email" class="input" placeholder="Email" required/>
            <input type="password" name="password" id="password" class="input" placeholder="Password" required/>
            <button type="submit" class="button">Login</button>
        </form>
    </div>
</body>
</html>
