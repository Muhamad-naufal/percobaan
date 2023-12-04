<?php
include "public/config/connection.php";

// Ambil data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari user berdasarkan username dan password
$query = "INSERT INTO user (`nama_lengkap_user`, `username`, `password`) VALUES ('$nama', '$username', '$password')";
$result = $connect->query($query);

// Cek apakah query berhasil dijalankan
if ($result) {
    // Jika berhasil, arahkan ke halaman login.php
    // Jika berhasil, set pesan notifikasi
    session_start();
    $_SESSION['success_message'] = "Registrasi Berhasi, Silahkan Login.";
    header('Location: login.php');
    exit(); // Penting untuk memastikan tidak ada kode ekstra yang dijalankan setelah header
} else {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan atau lakukan sesuai kebutuhan Anda
    session_start();
    $_SESSION['error_message'] = "Registrasi Gagal, Silahkan Coba Lagi.";
    echo "Error: " . $connect->error;
}
// Tutup koneksi
$connect->close();
