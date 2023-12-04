<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Travel Website Login</title>
</head>

<body>
    <div class="container">
        <form class="login-form" action="f_register.php" method="post">
            <h2>Login</h2>
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
            <div class="register-link">
                <p>Sudah Memiliki Akun ? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>