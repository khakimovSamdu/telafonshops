<?php
    session_start();
    if($_SESSION['rol']!="admin"){
        header("Location: ../login.php");
    }
    include_once '../phoneorm.php';
?>