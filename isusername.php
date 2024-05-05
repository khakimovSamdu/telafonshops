<?php
    include_once 'config.php';

    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $query = "SELECT * FROM cilent WHERE username='$user' AND password='$pass';";
    $sql = mysqli_query($link, $query);
    $fetch = mysqli_fetch_assoc($sql);
    $ret = [];
    if ($fetch){
        $ret += ['xatolik'=>0, 'xabar'=>'Siz tizimga muvaffaqiyatli kirdingiz!', 'data'=>$rol];
    }
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Login yoki parol xato!', 'data'=>$rol];
    }
    echo json_encode($ret);

?>