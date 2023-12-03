<?php
include '../../../public/config/connection.php';

// get variable from form input
$namadaerah = $_POST["nama_daerah"];

// Check if the username already exists
$check_query = "SELECT * FROM `daerah` WHERE `nama_daerah` = '$namadaerah'";
$check_result = mysqli_query($connect, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // Username already exists, show alert and redirect
    echo "<script>
            alert('Daerah sudah ada!');
            window.location.href = 'tambah_daerah.php';
          </script>";
    exit();
} else {
    // Insert the new admin data into the database
    $insert_query = "INSERT INTO `daerah` (`id_nama_daerah`, `nama_daerah`) 
                    VALUES ('', '$namadaerah')";
    $insert_result = mysqli_query($connect, $insert_query);

    if ($insert_result) {
        // Insert successful, redirect to the data_admin.php page or perform other actions
        header("Location:data_daerah.php");
        exit();
    } else {
        // Insert failed, handle the error as needed
        echo "Error: " . mysqli_error($connect);
    }
}
mysqli_close($connect);
