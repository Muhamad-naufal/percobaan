<?php

function isUserLoggedIn()
{
    return isset($_SESSION['username']);
}

function redirectToLoginPage()
{
    header('Location: login.php');
    exit();
}
