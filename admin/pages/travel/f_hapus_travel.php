<?php
include "../../../public/config/connection.php";

$result = mysqli_query($connect, "DELETE FROM `traveling` WHERE id = '$_GET[id]'");

header("Location:data_travel.php");

?>