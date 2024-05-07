<?php 
    session_start();
    if(!($_SESSION['rol'])){
        header("Location: ../login.php");
    }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php
        include_once 'includes/head.php'
    ?>
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
            <?php include_once 'offcanvas-body.php'?>
        </div>
        <div style="height: 150px;">
            
        </div>
        
        <div class="section section-padding">
            <div class="container">
                <div class="course-list-wrapper">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="sidebar-wrap-02">
                                
                                <div class="sidebar-widget-02">
                                    <h3 class="widget-title">Ratings</h3>

                                    <div class="widget-checkbox">
                                        <ul class="checkbox-list">
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox9">
                                                <label class="form-check-label" for="checkbox9">
                                                    <div class="rating">
                                                        <div class="rating-on" style="width: 100%;"></div>
                                                    </div> (4.5)
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox10">
                                                <label class="form-check-label" for="checkbox10">
                                                    <div class="rating">
                                                        <div class="rating-on" style="width: 60%;"></div>
                                                    </div> (3.5)
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox11">
                                                <label class="form-check-label" for="checkbox11">
                                                    <div class="rating">
                                                        <div class="rating-on" style="width: 40%;"></div>
                                                    </div> (2)
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- Sidebar Wrapper End -->
                        </div>
                        <div class="col-lg-9">

                            <!-- Course Top Bar Start -->
                            <div class="course-top-bar">
                                <div class="course-top-text">
                                    <p>We found <span>78</span> Phone For You</p>
                                </div>
                                <div class="course-top-inner">
                                    <div class="course-top-menu">
                                        
                                    </div>

                                </div>
                            </div>
                            <!-- Course Top Bar End -->

                            <!-- Course Collapse Start -->
                            <div class="collapse" id="collapseFilters">
                                <div class="course-collapse">
                                    <div class="row">
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- Course Collapse End -->

                            <div class="tab-content">
                                <div class="tab-pane fade" id="grid">
                                    <div class="row">
                                        
                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Courses Start -->
                                            <div class="single-course">
                                                <div class="courses-image">
                                                    <a href=""><img style="height: 300px;" src="<?=$fetch['img_url']?>" alt="Courses"></a>
                                                </div>
                                                <div class="courses-content">
                                                    <div class="top-meta">
                                                        <div class="tag-time">
                                                            <a class="tag" href="#"><?=$fetch['company']?></a>
                                                            <p class="time"><i class="far fa-clock"></i> 2h 30m</p>
                                                        </div>
                                                        <span class="price">
                                                        <span class="sale-price">Free</span>
                                                        </span>
                                                    </div>
                                                    <h3 class="title"><a href="telafon-brends.php">Getting Started with the Linux Command Line</a></h3>
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
                                <?php
                                    include_once 'config.php';
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM product WHERE id='$id';";
                                    $sql = mysqli_query($link, $query);
                                    while($fetch = mysqli_fetch_assoc($sql)){
                                ?>
                                <div class="tab-pane fade show active" id="list">
                                    <!-- Course List Start -->
                                    <div class="course-list-items">

                                        <div class="single-course-list">
                                            <div class="course-image">
                                                <a href=""><img style="height: 300px;" src="<?=$fetch['img_url']?>" alt="Courses"></a>
                                            </div>
                                            <div class="course-content">
                                                <div class="top-meta">
                                                    <a class="tag" href="#"><?=$fetch['company']?></a>
                                                    <span class="price">
                                                        <span class="sale-price">Mavjud</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="telafon-brends.php">Getting Started with the Linux Command Line</a></h3>
                                                <span class="author-name">Andrew paker</span>

                                                <p>Managing a popular open source project can be daunting at first. How do we maintain all these issues, or automatically trigger</p>
                                                <h5>📱 <?=$fetch['name']?></h5>
                                                <h5>🎨 <?=$fetch['color']?></h5>
                                                <h5>💾 <?=$fetch['RAM']?> / <?=$fetch['memory']?></h5>
                                                <div class="bottom-meta">
                                                    <p class="meta-action"><i class="far fa-user"></i> 79</p>
                                                    <p class="meta-action"><i class="far fa-clock"></i> 2h 20min</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class='btn btn-primery' style='margin: 7px 2px; background-color: #0388fc'>Xarid berish</button> 
                                                    <button class='btn btn-danger'style='margin: 7px 2px; background-color: #f5c62c' >Cancel</button>          
                                                </div>
                                                
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include_once 'includes/footer.php'; ?>
        
        

    </div>

    <?php include_once 'includes/script.php' ?>

</body>
</html>