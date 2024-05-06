<?php
    session_start();
    include_once 'config.php';
    $login = $_POST['login'];
    $query = "SELECT * FROM cilent WHERE username='$login';";
    $sql = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($sql);
    $ret = [];

    if ($user['id']==0){
        $_SESSION['rol'] = $user['rol'];
        $_SESSION['login'] = $user['username'];
        $ret += ['xatolik'=>0, 'xabar'=>"Muvaffaqqiyatli"];
    }else{
        $ret += ['xatolik'=>1, 'xabar'=>'Bu username mavjud'];
    }
    echo json_encode($ret);
?>