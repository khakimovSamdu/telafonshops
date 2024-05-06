<?php
    session_start();
    
    if(!(isset($_SESSION['rol']))){
        header("Location: ../login.php");
        exit;
    }
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

        <?php include_once "main.php";?>


        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <?php include_once '../includes/offcanvas-body.php' ?>
        </div>

        <div class='container'>
            <div class='row' style='height: 100px'>
                
            </div>
        </div>
       
        </div>
        <!-- Category Start -->
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
                                                <div>
                                                    <button type="button" class="btn btn-lg btn-warning " style="background-color: #d9a630; margin: 6px; 0"><a style="text-decoration: none;color:white" href="phone-update.php?id=<?=$fetch['id']?>">Update</a></button> 
                                                    <button type="button" class="btn btn-lg btn-danger " style="background-color: #de221f; margin: 6px 0;" id='delete' ><a style="text-decoration: none;color:white" href="delete.php?id=<?=$fetch['id']?>" onclick='o_tish()'>Delete</a></button>
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
                                     <div class="col-lg-3 col-sm-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-course">
                                            <div class="courses-image">
                                                <img style="height: 300px;" src="../assets/images/iphone.webp" alt="Courses">
                                            </div>
                                            <div class="courses-content">
                                                <div class="top-meta">
                                                    <div class="tag-time">
                                                        <a class="tag" href="#">Company</a>
                                                        <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                    </div>
                                                    <span class="price">
                                                    <span class="sale-price">Price $</span>
                                                    </span>
                                                </div>
                                                <h5>📱 Telafon name</h5>
                                                <h5>🎨 Telafon rang</h5>
                                                <h5>💾 RAM / ROM</h5>
                                                <div>
                                                    <button style="display: block; width:100%; background-color:#06b823; margin-top: 6px" class='btn btn-primary'><a style="text-decoration: none;color:white" href="phone-insert.php">+ INSERT</a></button>
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
        
        
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script type="text/javascript">
        
        $('#delete').click(function () {
            let id = $(this).attr("id");
            swal({
                title: "Ishonchingiz komilmi?",
                text: "O'chirilgandan so'ng tiklab bo'lmaydi",
                icon: "warning",
                buttons:{
                    cancel:"Yo'q!",
                    confirm: {
                        text: "Ha, roziman!",
                        value: true,
                    },
                },
            })
            .then((willDelete)=>{
                if (willDelete){
                    $.ajax({
                        url:"delete.php",
                        type:"GET",
                        data:{
                            id:id,
                        },
                        success:function(data){
                            let obj = jQuery.parseJSON(data);
                            console.log(obj);
                            if (obj.xatolik == 0){
                                $('#t'+id).remove();
                                swal("O'chirildi!", obj.xabar, "success");
                                
                            }
                            else{
                                swal("Xatolik!", obj.xabar, "error");
                            }
                        },
                        error:function(xhr){
                            alert("Kechirasiz, internetdan uzilish ro'y berdi. Iltimos tekshirib qaytadan urining");
                        },
                    });
                }else{
                    swal("Bekor qilindi!");
                }
            });
        });
    </script>
    <?php include_once "../includes/footer.php" ?>
    <?php 
        include_once '../includes/script.php';
    ?>

</body>
</html>