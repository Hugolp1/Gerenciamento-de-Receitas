<?php 

    session_start();

    unset($_SESSION['ingredients']);

    header("Location: profile.php");
    exit();