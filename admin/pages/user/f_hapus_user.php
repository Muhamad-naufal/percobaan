<?php
include "../../../public/config/connection.php";

$result = mysqli_query($connect, "DELETE FROM `user` WHERE id_nama_user = '$_GET[id_nama_user]'");

header("Location:data_user.php");

?>