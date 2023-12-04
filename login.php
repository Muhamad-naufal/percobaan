<?php
session_start();

// Check for success message
if (isset($_SESSION['success_message'])) {
    echo '<script>alert("' . $_SESSION['success_message'] . '")</script>';
}

// Check for error message
if (isset($_SESSION['error_message'])) {
    echo '<script>alert("' . $_SESSION['error_message'] . '"); window.location.href = "registrasi.php";</script>';
}
?>

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
        <form class="login-form" action="f_login.php" method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <div class="register-link">
                <p>Belum Memiliki Akun ? <a href="register.php">Register Sekarang!</a></p>
            </div>
        </form>
    </div>
</body>

</html>