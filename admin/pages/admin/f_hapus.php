<?php
include '../../../public/config/connection.php';

$result = mysqli_query($connect, "DELETE from `admin` where `id_nama_admin` = '$_GET[id_nama_admin]'");

header("Location:data_admin.php");
