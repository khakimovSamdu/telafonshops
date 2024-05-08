<?php
    session_start();

    if(isset($_SESSION['rol'])){
        header("Location: ".$_SESSION['rol']."/");
        exit;
    }
    include_once 'phoneorm.php';
    $db = new Smartphone();
         
?>