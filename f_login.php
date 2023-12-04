<?php
include "public/config/connection.php";

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari user berdasarkan username dan password
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $connect->query($query);

// Cek apakah user ditemukan
if ($result->num_rows > 0) {
    session_start();  // Mulai sesi
    $_SESSION['username'] = $username;  // Simpan nama pengguna di sesi
    header('Location: index.php');  // Arahkan ke index.php
    exit();
} else {
    // User tidak ditemukan, berikan pesan error
    $_SESSION['error_message'] = "Login Gagal. Username atau Password Salah.";
    echo "Login failed. Invalid username or password.";
}

// Tutup koneksi
$connect->close();
