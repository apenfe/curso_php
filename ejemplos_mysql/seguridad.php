<?php

    session_start();

    if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 1){
        header('Location: login.php');
        die();
    }
    ?>