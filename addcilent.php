<?php
    include_once 'config.php';
    $firstname = $_POST['ism'];
    $lastname = $_POST['fam'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $parol = md5($_POST['parol']);
    $query = "INSERT INTO cilent (first_name, last_name, username, email, password) VALUES ('$firstname', '$lastname', '$login', '$email', '$parol');";
    $sql = mysqli_query($link, $query);
    $ret = [];
    if ($sql){
        $ret += ['xatolik'=>0, 'xabar'=>"Muvaffaqiyatli ro'yxatdan o'tdingiz"];
    }
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Ro\'yxatdan o\'taolmadingiz'];
    }
    mysqli_close($link);
    echo json_encode($ret);
?>