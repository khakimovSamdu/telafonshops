<?php
    // session_start();
    // if(isset($_SESSION['rol'])){
    //     header("Location: ".$_SESSION['rol']."/");
    // }else{
    //     header("Location: ../login.php");
    // }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php 
        include_once '../config.php';
        include_once '../includes/head.php' ;
        
    ?>
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

        <?php include_once "../includes/main.php";?>


        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <?php include_once '../includes/offcanvas-body.php' ?>
        </div>


        <!-- Hero Start -->
        <div class="upstudy-hero-section section" style="background-image: url(assets/images/bg/hero-bg.jpg);">
            <div class="shape-3">
                <img src="../assets/images/shape/shape-1.png" alt="">
            </div>
            <div class="shape-4"></div>
            <div class="shape-5">
                <img src="../assets/images/shape/hero-shape2.png" alt="">
            </div>
            <div class="svg-shape">
                <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390">
                    <path d="M 0,400 C 0,400 0,200 0,200 C 247.5,166.5 495,133 735,133 C 975,133 1207.5,166.5 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill-opacity="1"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <p class="text" data-aos="fade-up" data-aos-delay="800"><img src="../assets/images/energy.png" alt="">2 000 ++ dan ortiq eng yaxshi telefonlarni xarid qiling</p>
                            <h1  data-aos="fade-up" data-aos-delay="700">Telefon sotib olmoqchi bo'lganlar uchun eng yaxshi sayt</h1>
                            <div class="hero-btn" data-aos="fade-up" data-aos-delay="900">
                                <a class="btn" href="login-register.php">Xarid qilish</a>
                            </div>
                            <p class="link-text" data-aos="fade-up" data-aos-delay="1000"><span>Kredit karta bilan xarid qilish mumkin</span> Kiridit karta bilan sovda orqali</p>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Hero Images Start -->
                        <div class="hero-images">
                            <img class="shape-1" src="../assets/images/shape/hero-shape1.png" alt="">
                            <div class="shape-2"></div>
                            <div class="shape-6">
                                <img src="../assets/images/shape/shape-7.png" alt="">
                            </div>
                            <div class="image">
                                <img src="../assets/images/devoloper.jpg" alt="">
                                
                            </div>
                        </div>
                        <!-- Hero Images End -->
                    </div>
                </div>
            </div>

        </div>
        <!-- Hero End -->

        <!-- Category Start -->
        <div class="section upstudy-category-section">
            <div class="container">
                <div class="category-wrap">
                    <div class="row">
                        <div class="section-title text-center">
                            <h2 class="title">Mavjud <span>Telafonlar</span></h2>
                        </div>
                    </div>
                    <div class="category-content-wrap">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.php" class="category-item">
                                    <div class="category-icon">
                                        <img src="../assets/images/cat-icon1.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Apple</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.php" class="category-item color-2">
                                    <div class="category-icon">
                                        <img src="../assets/images/cat-icon2.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Huawei</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.php" class="category-item color-3">
                                    <div class="category-icon">
                                        <img src="../assets/images/cat-icon3.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Nokia</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.php" class="category-item color-4">
                                    <div class="category-icon">
                                        <img src="assets/images/cat-icon4.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Oppo</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.php" class="category-item color-4">
                                    <div class="category-icon">
                                        <img src="../assets/images/cat-icon5.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Redmi</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.php" class="category-item">
                                    <div class="category-icon">
                                        <img src="../assets/images/cat-icon6.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Samsung</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="course-grid.php" class="category-item color-2">
                                    <div class="category-icon">
                                        <img src="../assets/images/cat-icon7.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Vivo</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!-- Courses Start -->
        <div class="section section-padding">
            <div class="container">
                <!-- Courses Wrapper Start -->
                <div class="courses-wrapper">

                    <!-- Courses Tab Start -->
                    <div class="courses-tab">

                        <!-- Courses Tab Content Start -->
                        <div class="tab-content courses-tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="row">
                                    <?php 
                                        $query = "SELECT * FROM product";
                                        $sql = mysqli_query($link, $query);
                                        while ($fetch = mysqli_fetch_assoc($sql)){
                                    ?>
                                    <div class="col-lg-3 col-sm-6" id="t<?=$fetch['id']?>">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image" >
                                                <img style="height: 300px;" src="<?=$fetch['img_url']?>" alt="Courses">
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#"><?=$fetch['company']?></a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Narx: <?=$fetch['price']?>$</span>
                                                    </span>
                                                </div>
                                                <h5>📱 <?=$fetch['name']?></h5>
                                                <h5>🎨 <?=$fetch['color']?></h5>
                                                <h5>💾 <?=$fetch['RAM']?> / <?=$fetch['memory']?></h5>
                                               
                                                <div class="courses-meta">
                                                    <p class="author-name"><span>By</span> Xakimov Allamurod</p>
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
                                    <?php
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <!-- Courses Tab Content End -->

                    </div>
                    <!-- Courses Tab End -->

                </div>
                <!-- Courses Wrapper End -->
            </div>
        </div>
       
        <div class="section upstudy-testimonial-section">
            
        </div>
        <!-- Testimonial End -->

        <!-- Blog Start -->
       
        <!-- Blog End -->

       
        <?php include_once "../includes/footer.php" ?>
    </div>
    
    <?php 
        include_once '../includes/script.php';
    ?>

</body>
</html>