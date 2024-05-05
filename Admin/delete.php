<?php 
    include_once '../config.php';
    $id = $_GET['id'];
    $query = "DELETE FROM product WHERE id='$id';";
    $sql = mysqli_query($link, $query);
    $ret = [];
    if ($sql){
        $ret += ['xatolik'=>0, 'xabar'=>"Muvaffaqqiyatli o'chirildi"];
    }else{
        $ret += ['xatolik' => 1, "xabar" => "Xatolik. O'chirilmadi"];
    }
    json_encode($ret);
?>
<script>
    function o_tish() {
            let manzil = "index.php";                           
            window.location.href = manzil;
        }
    o_tish();
</script>