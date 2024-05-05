<?php
    session_start();
    if(isset($_SESSION['rol'])){
        header("Location: ".$_SESSION['rol']."/");
    }
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include_once 'head.php' ?>
    <style>
        .signup{
            font-size: 16px;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">

        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <?php include_once 'main.php' ?>
        <!-- Header End -->


        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
        <div class="section login-register-section section-padding">
            <div class="container">

                <!-- Login & Register Wrapper Start -->
                <div class="login-register-wrap">
                    <div class="row gx-5">
                        <div class="col-lg-7">
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title">Login</h2>
                                </div>
                                <div class="login-register-form">
                                    <form action="isusername.php" method="POST" id = 'logform'>
                                        <div class="single-form">
                                            <input  type="text" name='username' class="form-control" placeholder="Your username ">
                                        </div>
                                        <div  class="single-form">
                                            <input type="password" name='password' class="form-control"  placeholder="Your password" id = 'pass'>
                                        </div>
                                        <div class="form-btn">
                                            <button type="submit" class="btn">Login</button>
                                            <div class="signup">
                                                <span class="signup">Already have an account?
                                                <a href="register.php">Register</a>
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
            $('#logform').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:"isusername.php",
                    method:"POST",
                    data:$('#logform').serialize(),
                    success:function(data){
                        let obj = jQuery.parseJSON(data);
                        // console.log(obj);
                        if (obj.xatolik == 0){
                            swal("Good job!", obj.xabar, "success");
                            setTimeout(function(){
                                window.location.href = obj.data;
                            }, 2500);
                        }
                        else{
                            $('#pass').val('');
                            swal("Xatolik!", obj.xabar, "error");
                        }
                    },
                    error:function(){
                        alert("Internetingizda muammo bor qaytadan urinib ko'ring!")
                    }
                    
                });
                
            })
        </script>
        <?php include_once 'footer.php' ?>

    </div>
    <?php include_once 'script.php'?>
</body>
</html>