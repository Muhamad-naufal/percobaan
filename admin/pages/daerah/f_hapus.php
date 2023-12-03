<?php
include '../../../public/config/connection.php';

$result = mysqli_query($connect, "DELETE from `daerah` where `id_nama_daerah` = '$_GET[id_nama_daerah]'");

header("Location:data_daerah.php");
