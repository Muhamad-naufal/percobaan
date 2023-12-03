<?php
include '../../../public/config/connection.php';

// get variable from form input
$nama = $_POST["nama_lengkap"];
$username_admin = $_POST["username"];
$password = $_POST["password"];

// Check if the username already exists
$check_query = "SELECT * FROM `admin` WHERE `username` = '$username_admin'";
$check_result = mysqli_query($connect, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // Username already exists, show alert and redirect
    echo "<script>
            alert('Username sudah dipakai, ganti username kamu.');
            window.location.href = 'tambah_admin.php';
          </script>";
    exit();
} else {
    // Insert the new admin data into the database
    $insert_query = "INSERT INTO `admin` (`nama_lengkap`, `username`, `password`) VALUES ('$nama', '$username_admin', '$password')";
    $insert_result = mysqli_query($connect, $insert_query);

    if ($insert_result) {
        // Insert successful, redirect to the data_admin.php page or perform other actions
        header("Location:data_admin.php");
        exit();
    } else {
        // Insert failed, handle the error as needed
        echo "Error: " . mysqli_error($connect);
    }
}

mysqli_close($connect);
