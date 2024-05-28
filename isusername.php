<?php
    session_start();
    include_once 'config.php';

    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $query = "SELECT * FROM cilent WHERE username='$user' AND password='$pass';";
    $sql = mysqli_query($link, $query);
    $fetch = mysqli_fetch_assoc($sql);
    $rol = $fetch['rol'];
    $ret = [];
    if ($fetch){
        $_SESSION['rol'] = $fetch['rol'];
        $_SESSION['id'] = $fetch['id'];
        $_SESSION['login'] = $fetch['username'];
        $ret += ['xatolik'=>0, 'xabar'=>'Siz tizimga muvaffaqiyatli kirdingiz!', 'data'=>$rol, 'username'=>$user];
    }
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Login yoki parol xato!', 'data'=>$rol, 'username'=>$user];
    }
    echo json_encode($ret);

?>