<?php
include '../../../public/config/connection.php';

$result = mysqli_query($connect, "DELETE from `review` where `id_nama_review` = '$_GET[id_nama_review]'");

header("Location:data_review.php");
