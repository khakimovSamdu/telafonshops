<?php
    session_start();
    if($_SESSION['rol']!="Foydalanuvchi"){
        header("Location: ../login.php");
    }
    include_once '../phoneorm.php';
?>