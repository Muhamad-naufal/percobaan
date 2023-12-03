<?php
include '../../../public/config/connection.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input

$nama_daerah = $_POST["nama_daerah"];

$result = mysqli_query($connect, "UPDATE `daerah` set `nama_daerah` = '$nama_daerah' where `id_nama_daerah` = '$_GET[id_nama_daerah]'");

header("Location:data_daerah.php");
