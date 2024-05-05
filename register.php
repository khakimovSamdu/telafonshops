<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include_once 'head.php'; ?>
    <style>
        .signup{
            font-size: 16px;
            margin-top: 5px;
            text-align: center;
        }
        .qizil{
            color: red;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <?php include_once 'main.php' ?>
        <div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
        <div class="section login-register-section section-padding">
            <div class="container">
                <div class="login-register-wrap">
                    <div class="row gx-5">
                        <div class="col-lg-7">
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title">Register</h2>
                                </div>
                                <div class="login-register-form">
                                    <form action="addcilent.php" method="POST" id = 'regform'>
                                        <div class="single-form">
                                            <input type="text" name="ism" class="form-control" placeholder="Enter your firstname" id='first' required>
                                        </div>
                                        <div class="single-form">
                                            <input type="text" name="fam" class="form-control" placeholder="Enter your lastname" id='last' required>
                                        </div>
                                        <div class="single-form">
                                            <input type="text" name="login" class="form-control" placeholder="Enter your username" id = "lgn" required>
                                            <p id="helpblock" style="color:red; font-size: 14px; display: none; padding:none;"></p>
                                        </div>
                                        <div class="single-from">
                                            <select name="user" class="form-control">
                                                <option >Siz kim bo'lib dasturdan foydalanmoqchisiz?</option>
                                                <option name="admin">Admin</option>
                                                <option name="sotuv">Sotuvchi</option>
                                                <option name="cilent">Foydalanuvchi</option>
                                                <option name="servis">Servis</option>
                                            </select>
                                        </div>
                                        <div class="single-form">
                                            <input type="email" name="email" class="form-control" placeholder="Enter your email " id='gmail' required>
                                        </div>
                                        <div class="single-form">
                                            <input type="password" name="parol" class="form-control" placeholder="Password " id="pas1" required>
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" placeholder="Confirm Password " id="pas2" required>
                                            <p id='mesg' style="font-size:14px; color:red;"></p>
                                        </div>
                                        <div class="form-btn">
                                            <button type="submit" class="btn">Register</button>
                                            <div class="signup">
                                                <span class="signup">Already have an account?
                                                <a href="login.php">Login</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/sweetalert.min.js"></script>

        <script type="text/javascript">
            $('#lgn').on("keyup", function(){
                let l = $(this).val();
                $.ajax({
                    url:"login-tek.php",
                    method:"POST",
                    data:{
                        login:l,
                    },
                    success:function(data){
                        let obj = jQuery.parseJSON(data);
                        // console.log(obj);
                        if (obj.xatolik != 0){
                            $('#helpblock').css('display', 'block');
                            $("#helpblock").html(obj.xabar);
                            
                        }
                        else{
                            $('#helpblock').css('display', 'none');
                            // $('#first').val('');
                            // $('#last').val('');
                            // $('#lgn').val('');
                            // $('#pas1').val('');
                            // $('#pas2').val('');
                        }
                        
                    },
                    error:function(xhr){
                        alert("Siz server bilan bog'lana olmadingiz");
                    }
                })
            });
            $("#regform").submit(function(e){
                e.preventDefault();
                let p1 = $('#pas1').val();
                let p2 = $('#pas2').val();
                if (p1!=p2){
                    $('#mesg').html('Parollar mos emas');
                    $('#pas1').addClass('qizil');
                    $('#pas2').addClass('qizil');
                    return 0;
                }
                $.ajax({
                    url:'addcilent.php',
                    method:"POST",
                    data:$('#regform').serialize(),
                    success:function(data){
                        let obj =jQuery.parseJSON(data);
                        if (obj.xatolik==0){
                            swal("Good job!", obj.xabar, "success");
                            setTimeout(function(){
                                window.location.href = obj.data;
                            }, 2500);
                        }else{
                            swal("Xatolik!", obj.xabar, "error");
                        }
                    },
                    error:function(){
                        alert('Xatolik yuz berdi');
                    }
                });
            })

        </script>
        <!-- Footer Start -->
        <?php include_once 'footer.php' ?>

    </div>
    <?php include_once 'script.php'?>
</body>
</html>