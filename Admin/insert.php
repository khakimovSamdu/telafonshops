<?php
    include_once 'config.php';
    $name = $_POST['name'];
    $company = $_POST['company'];
    $color = $_POST['color'];
    $ram = $_POST['ram'];
    $memory = $_POST['memory'];
    $img_url = $_POST['img_url'];
    $price = $_POST['price'];
    $query = "INSERT INTO product(name, company, RAM, memory, price, color, img_url) VALUES ('$name', '$company', '$ram', '$memory', '$price', '$color', '$img_url');";
    $sql = mysqli_query($link, $query);
    $ret = [];
    if ($sql){
        $ret += ['xatolik'=>0, 'xabar'=>"Muvaffaqiyatli qo'shildi!"];
    } 
    else{
        $ret += ['xatolik'=>1, 'xabar'=>'Xatolik!. Ma\'lumotingizni tekshirib qaytadan urinib ko\'ring.'];
    }
    mysqli_close($link);
    echo json_encode($ret);
?>