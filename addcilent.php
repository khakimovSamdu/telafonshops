<?php
    include_once 'config.php';
    session_start();

    $firstname = $_POST['ism'];
    $lastname = $_POST['fam'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $parol = md5($_POST['parol']);
    $ret = [];
    $query = "INSERT INTO cilent (first_name, last_name, username, email, password) VALUES ('$firstname', '$lastname', '$login', '$email', '$parol');";

    $sql = mysqli_query($link, $query);
    $tanlash = "SELECT * FROM cilent WHERE username='$login' AND password='$parol';";
        
    $surov = mysqli_query($link, $tanlash);
    $fetch = mysqli_fetch_assoc($surov);
    if ($sql){
        $_SESSION['rol'] = $fetch['rol'];
        $_SESSION['login'] = $fetch['username'];
        $_SESSION['id'] = $fetch['id'];
        $rol = $fetch['rol'];
        $ret += ['xatolik'=>0, 'xabar'=>"Muvaffaqiyatli ro'yxatdan o'tdingiz", 'data'=>$rol];
    }
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Ro\'yxatdan o\'taolmadingiz'];
    }
    
    mysqli_close($link);
    echo json_encode($ret);
?>