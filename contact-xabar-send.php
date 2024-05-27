<?php
    include_once 'phoneorm.php'; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];
    $db = new Smartphones();
    $sql = $db->brend_insert('contact_message', ['name'=>$name, 'email'=>$email, 'number'=>$number, 'subject'=>$subject, 'message'=>$text]);
    $ret = [];
    if($sql){
        $ret += ['xatolik'=>0, 'xabar'=>"Xabaringiz muvaffaqiyatli qabul qilindi"];
    }else{
        $ret += ['xatolik'=>1, 'xabar'=>"Xatolik yuz berdi qaytadan yuborib ko'ring"];
    }
    echo json_encode($ret);
?>