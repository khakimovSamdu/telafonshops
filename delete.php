<?php 
    include_once 'config.php';
    $id = $_GET['id'];
    $query = "DELETE FROM product WHERE id='$id';";
    $sql = mysqli_query($link, $query);
    $ret = [];
    if ($sql){
        $ret += ['xatolik'=>0, 'xabar'=>"Muvaffaqqiyatli o'chirildi"];
    }else{
        $ret += ['xatolik' => 1, "xabar" => "Xatolik. O'chirilmadi"];
    }
    echo json_encode($ret);
?>