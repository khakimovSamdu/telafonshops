<?php
    include_once 'config.php';

    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $query = "SELECT * FROM cilent WHERE username='$user' AND parol='$pass';";
    $sql = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($sql);
    print_r($user);
    exit;
    $ret = [];
    if ($user['id']!=0){
        $ret += ['xatolik'=>0, 'xabar'=>'Siz tizimga muvaffaqiyatli kirdingiz!'];
    }
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Login yoki parol xato!'];
    }
    echo json_encode($ret);

?>