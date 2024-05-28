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
                            <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1"><a href="index-2.php?name=Apple">Apple</a></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab2"><a href="index-2.php?name=Huawei">Huawei</a></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab3"><a href="index-2.php?name=Nokia">Nokia</a></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab4"><a href="index-2.php?name=Oppo">Oppo</a></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab5"><a href="index-2.php?name=Redmi">Redmi</a></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab6"><a href="index-2.php?name=Samsung">Samsung</a></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab7"><a href="index-2.php?name=Vivo">Vivo</a></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab8"><a href="index.php">Home</a></button></li>
                        </ul>
                    </div>
                </div>
                <div class="courses-wrapper">
                    <div class="courses-tab">
                        <div class="tab-content courses-tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="row">
                                    <?php 
                                        include_once '../config.php';
                                        $company = $_GET['name'];
                                        $query = "SELECT * FROM product WHERE company='$company' ORDER BY id DESC;";
                                        $sql = mysqli_query($link, $query);
                                        while($fetch=mysqli_fetch_assoc($sql)){
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
                                    <?php } ?>
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
                    <?php 
                        include_once '../config.php';
                        $company = $_GET['name'];
                        $query = "SELECT * FROM product WHERE company='$company' ORDER BY id DESC LIMIT 8;";
                        $sql = mysqli_query($link, $query);
                        
                        while($fetch=mysqli_fetch_assoc($sql)){
                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Category Start -->
                            <div class="category-item-02">
                                <div class="category-img">
                                    <a href="telafon-brends.php"><img style="height: 300px;" src="<?=$fetch['img_url']?>" alt=""></a>
                                </div>
                                <div class="category-content text-center">
                                    <h4 class="title"><a href="telafon-brends.php"><?=$fetch['name']?></a></h4>
                                </div>
                            </div>
                            <!-- Single Category End -->
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        


        <?php include_once '../includes/footer.php' ?>
        <!-- back to top start -->

       
    </div>

    <?php include_once '../includes/script.php' ?>

</body>
</html>