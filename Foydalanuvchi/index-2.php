<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include_once '../includes/head.php'?>
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
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <div class="offcanvas-logo">
                    <a href="index.php"><img src="../assets/images/logo-white.png" alt=""></a>
                </div>
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>
            <?php include_once '../includes/offcanvas-body.php' ?>
        </div>
        <div style="height: 150px">
        </div>
        <div class="section section-padding-03">
            <div class="container">
                <!-- Course Header Start -->
                <div class="course-header">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"><span>Telafon</span> Yangiliklari</h2>
                    </div>
                    <div class="tab-menu">
                        <ul class="nav justify-content-center justify-content-lg-start">
                            <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Apple</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab2">Huawei</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab3">Nokia</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab4">Oppo</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab5">Redmi</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab6">Samsung</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab7">Vivo</button></li>
                        </ul>
                    </div>
                </div>
                <div class="courses-wrapper">
                    <div class="courses-tab">
                        <div class="tab-content courses-tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <a href="course-details.html"><img src="../assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Getting Started with the Linux Command Line</a></h3>
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Andrew paker</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="section upstudy-category-section-02 section-padding-02" style="background-image: url(assets/images/bg/cate-bg.png);">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title">Smartphone <span> Category</span></h2>
                </div>
                <div class="category-wrap">

                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Category Start -->
                            <div class="category-item-02">
                                <div class="category-img">
                                    <a href="course-grid.html"><img src="../assets/images/cat-1.jpg" alt=""></a>
                                </div>
                                <div class="category-content text-center">
                                    <h4 class="title"><a href="course-grid.html">Development</a></h4>
                                </div>
                            </div>
                            <!-- Single Category End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        


        <?php include_once '../includes/footer.php' ?>
        <!-- back to top start -->

       
    </div>

    <!-- JS
    ============================================ -->
    <?php include_once '../includes/script.php' ?>

</body>
</html>