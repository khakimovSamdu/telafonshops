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
        <?php include_once '../includes/main.php'?>

        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
           <div class="section upstudy-blog-section section-padding">
            <div class="container">
                <!-- Latest Blog Wrap Start -->
                <div class="blog-wrap">

                    <div class="row">
                        <?php
                            include_once '../phoneorm.php';
                            $db = new Smartphones();
                            $fetchs = $db->get_brend_company('product');
                            while($fetch = mysqli_fetch_assoc($fetchs)){
                                $get_brends_limit = $db->get_brends('product', ['company'=>$fetch['company']], 'ORDER BY id DESC LIMIT 3');
                                foreach($get_brends_limit as $key=>$brend){
                                    ?>
                                    <div class="col-lg-3 col-sm-6" id="t<?=$brend['id']?>">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image" >
                                                <img style="height: 300px;" src="<?=$brend['img_url']?>" alt="Courses">
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#"><?=$brend['company']?></a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Narx: <?=$brend['price']?>$</span>
                                                    </span>
                                                </div>
                                                <h5>📱 <?=$brend['name']?></h5>
                                                <h5>🎨 <?=$brend['color']?></h5>
                                                <h5>💾 <?=$brend['RAM']?> / <?=$brend['memory']?></h5>
                                                <div>
                                                    <button type="button" class="btn btn-warning " style="background-color: #03a5fc; margin: 6px 0; "><a href="cart-phone.php?id=<?=$brend['id']?>">Xarid qilish</a></button> 
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

                            }
                            
                        ?>
                        
                        
                    </div>
                    <div class="upstudy-pagination">
                        <ul class="pagination justify-content-center">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="blog.html">1</a></li>
                            <li><a class="active" href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><span>...</span></li>
                            <li><a href="blog.html"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Blog Wrap End -->
            </div>
        </div> 
            
            
        </div>
        <!-- Page Banner End -->

        <!-- Blog Start -->
        
        <!-- Blog End -->


        <?php include_once '../includes/footer.php'?>

    </div>

    <?php include_once '../includes/script.php'?>

</body>
</html>