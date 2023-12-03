<?php
include '../../../public/config/connection.php';

// get variable from form input
$nama_kategori = $_POST["nama_kategori"];


$result = mysqli_query($connect, "INSERT INTO `kategori` ( `nama_kategori`) VALUES ('$nama_kategori');");

header("Location:data_kategori.php");
