<?php
    include_once 'config.php';
    $firstname = $_POST['ism'];
    $lastname = $_POST['fam'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $rol = ($_POST['user']);
    $parol = md5($_POST['parol']);
    $ret = [];
    if ($rol != "Siz kim bo'lib dasturdan foydalanmoqchisiz?"){
        $query = "INSERT INTO cilent (first_name, last_name, username, email, password, rol) VALUES ('$firstname', '$lastname', '$login', '$email', '$parol', '$rol');";
        $sql = mysqli_query($link, $query);
        if ($sql){
            $ret += ['xatolik'=>0, 'xabar'=>"Muvaffaqiyatli ro'yxatdan o'tdingiz", 'data'=>$rol];
        }
        else{
            $ret += ['xatolik'=>1, 'xabar'=>'Ro\'yxatdan o\'taolmadingiz', 'data'=>$rol];
        }
    }else{
        $ret += ['xatolik'=>1, 'xabar'=>'Siz qanday foydalanuvchisiz', 'data'=>$rol];
    }
    
    mysqli_close($link);
    echo json_encode($ret);
?>