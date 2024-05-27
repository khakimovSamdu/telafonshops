<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include_once '../includes/head.php' ?>
</head>
<body>
    <div class="main-wrapper">
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <?php include_once '../includes/main.php'?>
        

        <div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
            <div class="shape-1">
                <img src="assets/images/shape/shape-7.png" alt="">
            </div>
            <div class="shape-2">
                <img src="assets/images/shape/shape-1.png" alt="">
            </div>
            <div class="shape-3"></div>
            <div class="container">
            <div class="section contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-wrap">
                            <h3 class="info-title">Contact with us</h3>
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Telephone Number</h5>
                                    <p>+998 (93) 855-46-40</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Email</h5>
                                    <p>allamurodxakimov@gmail.com</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Office Location Address</h5>
                                    <p>Samarqand shahar, Nomozgoh mahallasi, IT Markaz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-wrap">
                            <form action="../contact-xabar-send.php" method="POST" id="messagefrom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input class="form-control" type="text" name='name' id="yangila" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input class="form-control" type="email" name='email' id="yangila1" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input class="form-control" type="text" name='number' id="yangila2" placeholder="Your Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input class="form-control" type="text" name='subject' id="yangila3" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea class="form-control" name='text' id="yangila4" placeholder="Write A Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Contact Map Start -->
        
        <?php include_once '../includes/footer.php'?>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('#messagefrom').submit(function(e){
            e.preventDefault();
            $.ajax({
                url:"../contact-xabar-send.php",
                method: "POST",
                data:$('messagefrom').serialize(),
                success:function(data){
                    let obj =jQuery.parseJSON(data);
                    console.log(data);
                    if(obj.xatolik == 0){
                        swal("Send message!", obj.xabar, 'success');
                        $('#yangila').val('');
                        $('#yangila1').val('');
                        $('#yangila2').val('');
                        $('#yangila4').val('');
                        $('#yangila3').val('');
                    }else{
                        swal("Error", obj.xabar, 'error');
                    }
                },
                error:function(){
                    alert("Internetingizda muammo bor tekshirib qaytadan urinib ko'ring!");
                }
            });
        })
    </script>
    <?php include_once '../includes/script.php'?>
</body>
</html>