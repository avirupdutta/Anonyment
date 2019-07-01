<?php
    session_start();

    if (!isset($_SESSION['user_email'])){
        header("Location: login.php");
        exit();
    }else{
        header("Location: account.php'");
    }
