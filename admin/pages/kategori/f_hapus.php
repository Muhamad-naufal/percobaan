<?php
include '../../../public/config/connection.php';

$result = mysqli_query($connect, "DELETE from `kategori` where `id_nama_kategori` = '$_GET[id_nama_kategori]'");

header("Location:data_kategori.php");
