<?php
    include_once 'config.php';

    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $query = "SELECT * FROM cilent WHERE username='$user' AND password='$pass';";
    $sql = mysqli_query($link, $query);
    $ret = [];
    if ($sql){
        $ret += ['xatolik'=>0, 'xabar'=>'Siz tizimga muvaffaqiyatli kirdingiz!'];
    }
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Login yoki parol xato!'];
    }
    echo json_encode($ret);

?>