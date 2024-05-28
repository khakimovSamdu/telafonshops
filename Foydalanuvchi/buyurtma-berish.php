<?php
    session_start();
    include_once("../phoneorm.php");
    $db = new Smartphones() ;
    $sender_id = $_SESSION["id"];
    $phone_id = $_POST['id'];
    $arr = ['phone_id'=>$phone_id, 'sender_id'=>$sender_id] ;
    $sql = $db->brend_insert('xarid', $arr);
    $ret = [];
    if($sql ) {
        $ret += ['xatolik'=>0, 'xabar'=>'Muvaffaqiyatli qo\'shildi'];
    } else {
        $ret += ['xatolik'=>1, 'xabar'=>'Xatolik yuz berdi'];
    }
    echo json_encode($ret);
?>