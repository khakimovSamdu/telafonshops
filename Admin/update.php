<?php
    include_once '../config.php';
    $name = $_POST['name'];
    $company = $_POST['company'];
    $color = $_POST['color'];
    $ram = $_POST['ram'];
    $memory = $_POST['memory'];
    $price = $_POST['price'];
    $img_url = $_POST['img_url'];
    $id = $_POST['id'];
    
    $query = "UPDATE product SET name='$name', company='$company', RAM='$ram', memory='$memory', price='$price', color='$color', img_url='$img_url' WHERE id='$id';";
    $sql = mysqli_query($link, $query);
    $ret = [];
    if($sql){
        $ret += ['xatolik'=>0, 'xabar'=>'Muvaffaqiyatli o\'zgartirildi'];
    }
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Xatolik! Malumotingizni tekshirib qaytadan o\'zgartirib ko\'ring'];
    }
    echo json_encode($ret);
?>