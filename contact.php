<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include_once 'head.php' ?>
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

        <?php include_once 'main.php' ?>


        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">

            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.html"><img src="assets/images/logo-white.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->

                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>

            </div>
            <?php include_once 'offcanvas-body.php'?>
        </div>
        <!-- Offcanvas End -->


        <!-- Page Banner Start -->
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
                            <!--Single Contact Info End -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- Contact Form Wrap Start -->
                        <div class="contact-form-wrap">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input class="form-control" type="text" placeholder="Your Name">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input class="form-control" type="email" placeholder="Your Email">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input class="form-control" type="text" placeholder="Your Number">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input class="form-control" type="text" placeholder="Subject">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <textarea class="form-control" placeholder="Write A Message"></textarea>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-12">
                                        <!--  Single Form Start -->
                                        <div class="form-btn">
                                            <button class="btn" type="submit">Send Message</button>
                                        </div>
                                        <!--  Single Form End -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form Wrap End -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Contact Map Start -->
        <div class="section contact-map-section">
            <div class="contact-map-wrap">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
            </div>
        </div>
        <!-- Contact Map End -->


        <!-- Footer Start -->
        <?php include_once 'footer.php'?>
        <!-- Footer End -->

        <!-- back to top start -->

    </div>
        <?php include_once 'script.php'?>
    </body>
</html>