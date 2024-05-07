<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php
        include_once '../includes/head.php'
    ?>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <!-- <script src='https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../xarid.css" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <?php
            include_once 'main.php'
        ?>
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <div class="offcanvas-logo">
                    <a href="index.php"><img src="assets/images/logotip1.jpg" alt=""></a>
                </div>

                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>

            </div>
            <?php include_once '../offcanvas-body.php'?>
        </div>
        <div style="height: 150px;">
        </div>
        
        <div class="section section-padding">
            <div class="container">
                <div class="course-list-wrapper">
                    <div class="row">
                        
                        <div class="col-lg-9">
                            <?php
                                include_once '../config.php';
                                $id = $_GET['id'];
                                $query = "SELECT * FROM product WHERE id='$id';";
                                $sql = mysqli_query($link, $query);
                                while($fetch = mysqli_fetch_assoc($sql)){
                            ?>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="list">
                                    <!-- Course List Start -->
                                    <div class="course-list-items">
                                        <div class="single-course-list">
                                                <div class="course-image">
                                                    <a href=""><img style="height: 300px;" src="<?=$fetch['img_url']?>" alt="Courses"></a>
                                                </div>
                                                <div class="course-content">
                                                    <div class="top-meta">
                                                        <a  class="tag" href="#"><?=$fetch['company']?></a>
                                                        <span class="price">Narx: <?=$fetch['price']?> $</span>
                                                    </div>
                                                    <p>Managing a popular open source project can be daunting at first. How do we maintain all these issues, or automatically trigger</p>
                                                    <h5>📱 <?=$fetch['name']?></h5>
                                                    <h5>🎨 <?=$fetch['color']?></h5>
                                                    <h5>💾 <?=$fetch['RAM']?> / <?=$fetch['memory']?></h5>
                                                </div>
                                            </div>                                   
                                        </div>
                                </div>
                            </div>
                            <?php }?>
                            <div class="container">
                                <h1 class="h3 mb-5">Payment</h1>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="accordion" id="accordionPayment">
                                            <div class="accordion-item mb-3">
                                                <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                                                    <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCC" aria-expanded="false">
                                                        <input class="form-check-input" type="radio" name="payment" id="payment1">
                                                        <label class="form-check-label pt-1" for="payment1">
                                                        Credit Card
                                                        </label>
                                                    </div>
                                                    <span>
                                                        <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                                                        <g fill-rule="nonzero" fill="#333840">
                                                            <path d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z"></path>
                                                            <path d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z"></path>
                                                        </g>
                                                        </svg>
                                                    </span>
                                                </h2>
                                                <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" style="">
                                                    <div class="accordion-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Card Number</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label class="form-label">Name on card</label>
                                                                <input type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                <label class="form-label">Expiry date</label>
                                                                <input type="text" class="form-control" placeholder="MM/YY">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                <label class="form-label">CVV Code</label>
                                                                <input type="password" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-primary btn-lg" style="margin-top: 10px; margin-left: 240px; background-color: #21ad46;">Buyurtma berish</button>
                                                            <button class="btn btn-primary btn-lg" style="margin-top: 10px; margin-left: 20px; background-color: #c22d10; text-decoration: none"><a href="index.php">Bekor qilish</a></button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    </div>
    <?php include_once '../includes/footer.php'; ?>
    <?php include_once '../includes/script.php' ?>

</body>
</html>


