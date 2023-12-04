<?php
session_start();
include 'public/config/connection.php';

// get variable from form input
$review = $_POST["komentar"];
$id = $_POST["id"];
$username = $_SESSION['username'];

// Retrieve user ID from the database based on the username
$result_user = mysqli_query($connect, "SELECT id_nama_user FROM user WHERE username = '$username'");
$row_user = mysqli_fetch_assoc($result_user);
$id_user = $row_user['id_nama_user'];

// Insert into the review table
$result = mysqli_query($connect, "INSERT INTO `review` (`id_travel`, `id_user`, `review`) VALUES ('$id', '$id_user', '$review')");

header("Location: detail_destinasi.php?id=$id");
exit;
