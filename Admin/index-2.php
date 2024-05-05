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
                                    <?php 
                                        include_once '../config.php';
                                        $company = $_GET['name'];
                                        $query = "SELECT * FROM product WHERE company='$company' ORDER BY id DESC ;";
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
       
    </div>

    <?php include_once '../includes/script.php' ?>
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


</body>
</html>