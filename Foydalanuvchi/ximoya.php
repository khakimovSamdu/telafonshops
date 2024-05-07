<?php
    session_start();
    if($_SESSION['rol']!="foydalanuvchi"){
        header("Location: ../login.php");
    }
    include_once '../phoneorm.php';
?>