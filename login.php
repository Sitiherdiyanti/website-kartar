<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/pucangan.png" type="image/png">
    <title>LOGIN</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('images/pucangan.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Putih dengan transparansi */
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }

        .header {
            background: rgba(11, 19, 110, 0.9); /* Biru gelap dengan transparansi */
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .form {
            padding: 30px;
        }

        .form label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            color: #333;
        }

        .form input[type="email"],
        .form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        .form .remember-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form .remember-container input {
            margin-right: 10px;
        }

        .form .remember-container label {
            font-size: 14px;
        }

        .form .btn-container {
            text-align: center;
        }

        .form button {
            padding: 12px 24px;
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Warna gradien */
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            margin: 0 auto;
        }

        .form button:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb); /* Warna gradien berbalik */
            transform: scale(1.05); /* Sedikit perbesar */
        }

        .form .links {
            text-align: center;
            margin-top: 20px;
        }

        .form .links a {
            text-decoration: none;
            color: #6e8efb;
            font-size: 14px;
        }

        .form .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="header">
            <h1>Selamat Beraktivitas</h1>
            <p>Login Dulu Ya</p>
        </div>
        <div class="form">
            <form action="#" method="post">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">

                <label for="password">Password</label>
                <input type="password" id="password" name="password">

                <div class="remember-container">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="btn-container">
                    <button type="submit">Login</button>
                </div>
                <div class="links">
                    <a href="#">Forgot Password?</a> |
                    <a href="#">Create Account</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
