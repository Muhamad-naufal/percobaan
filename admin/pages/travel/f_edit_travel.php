<?php
include '../../../public/config/connection.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$nama = $_POST["nama_tempat"];
$deskripsi = $_POST["deskripsi"];
$price = $_POST["price"];
$fasilitas = $_POST["fasilitas"];
$kategori = $_POST["kategori"];
$daerah = $_POST["daerah"];
$lokasi = $_POST["lokasi"];

// Upload Proses
$target_dir = "images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    $result = mysqli_query($connect, "UPDATE `traveling` set `nama_tempat` = '$nama', `gambar` = '$target_file', `deskripsi` = '$deskripsi', `price` = '$price', `fasilitas` = '$fasilitas', `id_kategori` = '$kategori', `id_daerah` = '$daerah', `lokasi` = '$lokasi' WHERE `id` = '$_GET[id]'");
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($connect, "UPDATE `traveling` set `nama_tempat` = '$nama', `deskripsi` = '$deskripsi',`price` = '$price', `fasilitas` = '$fasilitas', `id_kategori` = '$kategori', `id_daerah` = '$daerah', `lokasi` = '$lokasi' WHERE `id` = '$_GET[id]'");

header("Location:data_travel.php");
