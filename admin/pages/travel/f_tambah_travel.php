<?php
include '../../../public/config/connection.php';

// get variables from form input
$nama_tempat = $_POST["nama_tempat"];
$deskripsi = $_POST["deskripsi"];
$price = $_POST["price"];
$fasilitas = $_POST["fasilitas_text"];
$id_kategori = $_POST["kategori"];
$id_daerah = $_POST["daerah"];
$lokasi = $_POST["lokasi"];

// Upload Proses
$target_dir = "images/"; // path directory image akan disimpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yang akan disimpan

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini untuk memindahkan file dari tempat asal ke target_file
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    $result = mysqli_query($connect, "INSERT INTO `traveling` (`nama_tempat`, `gambar`, `deskripsi`, `price`, `fasilitas`, `id_kategori`, 
    `id_daerah`, `lokasi`) 
VALUES ('$nama_tempat', '$target_file', '$deskripsi', '$price', '$fasilitas', '$id_kategori', '$id_daerah', '$lokasi');");
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

// Redirect to the data_travel.php page
header("Location: data_travel.php");
