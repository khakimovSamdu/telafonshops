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
        <?php include_once 'main.php'?>

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
                            $fetchs = $db->get_brends('xarid', [] , '1');
                            foreach ($fetchs as $fetch) {
                                $phone_id = $fetch['phone_id'];
                                $sender_id = $fetch['sender_id'];
                                $brend = $db->get_brend('product', ['id'=>$phone_id]);
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
                                                <button type="button" class="btn btn-lg btn-danger delete" style="background-color: #de221f; margin: 6px 0;"  phone_id='<?=$phone_id?>' >Delete</button>
                                                </button>
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
                                    </div>
                                    <?php
                            }
                        ?>
                    </div>
                    <div class="upstudy-pagination">
                        <ul class="pagination justify-content-center">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a class="active"  href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><span>...</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Blog Wrap End -->
            </div>
        </div> 
        </div>
        <?php include_once '../includes/footer.php'?>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.delete').click(function () {
            let id = $(this).attr("phone_id");
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
                        url:"xarid-delete.php",
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
    <?php include_once '../includes/script.php'?>
</body>
</html>