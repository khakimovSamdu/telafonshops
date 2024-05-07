<?php
    // session_start();
    // if(isset($_SESSION['rol'])){
    //     header("Location: ".$_SESSION['rol']."/");
    // }else{
    //     header("Location: login.php");
    // }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php 
        include_once 'config.php';
        include_once 'head.php' ;
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

        <?php include_once "main.php";?>


        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <?php include_once 'offcanvas-body.php' ?>
        </div>


        <!-- Hero Start -->
        <div class="upstudy-hero-section section" style="background-image: url(assets/images/bg/hero-bg.jpg);">
            <div class="shape-3">
                <img src="assets/images/shape/shape-1.png" alt="">
            </div>
            <div class="shape-4"></div>
            <div class="shape-5">
                <img src="assets/images/shape/hero-shape2.png" alt="">
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
                            <p class="text" data-aos="fade-up" data-aos-delay="800"><img src="assets/images/energy.png" alt="">2 000 ++ dan ortiq eng yaxshi telefonlarni xarid qiling</p>
                            <h1  data-aos="fade-up" data-aos-delay="700">Telefon sotib olmoqchi bo'lganlar uchun eng yaxshi sayt</h1>
                            <div class="hero-btn" data-aos="fade-up" data-aos-delay="900">
                                <a class="btn" href="login.php">Ro'yxatdan o'tish</a>
                            </div>
                            <p class="link-text" data-aos="fade-up" data-aos-delay="1000"><span>Kredit karta bilan xarid qilish mumkin</span> Kiridit karta bilan sovda orqali</p>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Hero Images Start -->
                        <div class="hero-images">
                            <img class="shape-1" src="assets/images/shape/hero-shape1.png" alt="">
                            <div class="shape-2"></div>
                            <div class="shape-6">
                                <img src="assets/images/shape/shape-7.png" alt="">
                            </div>
                            <div class="image">
                                <img src="assets/images/devoloper.jpg" alt="">
                                
                            </div>
                        </div>
                        <!-- Hero Images End -->
                    </div>
                </div>
            </div>

        </div>
        <!-- Hero End -->

        <div class="section upstudy-category-section">
            <div class="container">
                <div class="category-wrap">
                    <div class="row">
                        <div class="section-title text-center">
                            <h2 class="title" style="margin-top: 100px">Mavjud <span>Telafonlar</span></h2>
                        </div>
                    </div>
                    <div class="category-content-wrap">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="index-2.php?name=Apple" class="category-item">
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
                                <a href="index-2.php?name=Huawei" class="category-item color-2">
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
                                <a href="index-2.php?name=Nokia" class="category-item color-3">
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
                                <a href="index-2.php?name=Oppo" class="category-item color-4">
                                    <div class="category-icon">
                                        <img src="../assets/images/cat-icon4.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h3 class="title">Oppo</h3>
                                    </div>
                                </a>
                                <!-- Category Item End -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Category Item Start -->
                                <a href="index-2.php?name=Redmi" class="category-item color-4">
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
                                <a href="index-2.php?name=Samsung" class="category-item">
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
                                <a href="index-2.php?name=Vivo" class="category-item color-2">
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
        <div class="section section-padding">
            <div class="container">
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
                                                <div>
                                                    <button type="button" class="btn btn-warning " style="background-color: #03a5fc; margin: 6px 0; "><a href="cart-phone.php?id=<?=$fetch['id']?>">Xarid qilish</a></button> 
                                                    <button type="button" class="btn  btn-danger " style="background-color: #06bf6c; margin: 6px 0;" id='delete' ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
                                                    </svg></i></button>
                                                </div>
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
        

       
        <?php include_once "footer.php" ?>
    </div>
    <?php include_once 'includes/script.php'?>
</body>
</html>