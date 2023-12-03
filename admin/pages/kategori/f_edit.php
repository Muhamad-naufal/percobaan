<?php
include '../../../public/config/connection.php';

// get variable from form input
$nama_kategori = $_POST["nama_kategori"];

// echo "UPDATE `kategori` set `nama_kategori` = '$nama_kategori', where `id_nama_kategori` = '$_GET[id_nama_kategori]'";

$result = mysqli_query($connect, "UPDATE `kategori` set `nama_kategori` = '$nama_kategori' where `id_nama_kategori` = '$_GET[id_nama_kategori]'");

header("Location:data_kategori.php");
