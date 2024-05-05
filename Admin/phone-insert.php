<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telafon qo'shish</title>
    <link rel="stylesheet" href="../assets/css/update.css">
</head>
<body>
  <div class="container">
    <div class="registration form">
      <header>Telafon qo'shish</header>
      <form  method="POST" id = 'insert'>
            <input type="text" name="name" placeholder="Smartphone name"  required>
            <input type="text" name="company" placeholder="Smartphone company" required>
            <input type="text" name="color" placeholder="Smartphone color"  required>
            <input type="text" name="ram" placeholder="Smartphone RAM"  required>
            <input type="text" name="memory" placeholder="Smartphone memory" required>
            <input type="text" name="price" placeholder="Smartphone price" required>
            <input type="text" name="img_url" placeholder="Smartphone img url" required>
            <button type="submit">Insert</button>
      </form>
    </div>
  </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('#insert').submit(function(e){
            e.preventDefault();
            $.ajax({
                url:"insert.php",
                method:"POST",
                data: $(this).serialize(),
                success:function(data){
                    let obj =jQuery.parseJSON(data);
                    console.log(obj);
                    if(obj.xatolik == 0){
                        swal('Good insert!', obj.xabar, 'success');
                        setTimeout(function(){
                            window.location.href='index.php';
                        }, 2000);
                    }
                    else{
                        swal('Insert error!', obj.xabar, 'error');
                    }
                    
                },
                error:function(){
                    alert("Serverda xatolik yuz berdi qaytadan urinib ko'ring");
                }
            });
            setTimeout(function o_tish () {
                let manzil = "index.php";                            
                window.location.href = manzil;
		    }, 2500);      
            o_tish();
        })
    </script>

</body>
</html>