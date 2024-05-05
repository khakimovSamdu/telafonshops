<?
    include_once 'config.php';
    $data = '{}';

    
    $dic = json_decode($data, true);
    $i=0;
    foreach($dic as $key => $val){
        $name = $val['name'];
        $company = $val['company'];
        $color = $val['color'];
        $ram = $val['RAM'];
        $memory = $val['memory'];
        $price = $val['price'];
        $img_url = $val['img_url'];
        $query = "INSERT INTO product(name, company, color, RAM, memory, price, img_url) VALUES 
        ('$name', '$company', '$color', '$ram', '$memory', '$price', '$img_url')";
        $sql = mysqli_query($link, $query);
        $i++;
    }
    echo $i;
    
?>