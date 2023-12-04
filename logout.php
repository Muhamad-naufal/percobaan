<?php
session_start(); // Start the session to access session variables

// Hancurkan semua data sesi
session_destroy();

// Arahkan pengguna ke halaman login atau halaman lain
header('Location: login.php');
exit();
