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
                                <div class="sidebar-widget-02">
                                    <h3 class="widget-title">Lavel</h3>

                                    <div class="widget-checkbox">
                                        <ul class="checkbox-list">
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox12">
                                                <label class="form-check-label" for="checkbox12">Beginner (11)</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox13">
                                                <label class="form-check-label" for="checkbox13">Advanced (07)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="course-top-bar">
                                <div class="course-top-text">
                                    <p>We found <span>78</span> Courses For You</p>
                                </div>
                                <div class="course-top-inner">
                                    <div class="course-top-menu">
                                        
                                    </div>

                                </div>
                            </div>

                            <div class="collapse" id="collapseFilters">
                                <div class="course-collapse">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- Sidebar Wrapper Start -->
                                            <div class="sidebar-widget-02">
                                                <h3 class="widget-title">Type of Courses</h3>

                                                <div class="widget-checkbox">
                                                    <ul class="checkbox-list">
                                                        <li class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="checkbox14">
                                                            <label class="form-check-label" for="checkbox14">Free (11)</label>
                                                        </li>
                                                        <li class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="checkbox15">
                                                            <label class="form-check-label" for="checkbox15">Paid (11)</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="list">
                                    <!-- Course List Start -->
                                    <div class="course-list-items">

                                        <div class="single-course-list">
                                            <div class="course-image">
                                                <a href="telafon-brends.php"><img src="../assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="course-content">
                                                <div class="top-meta">
                                                    <a class="tag" href="#">Beginner</a>
                                                    <span class="price">
                                                        <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="telafon-brends.php">Getting Started with the Linux Command Line</a></h3>
                                                <span class="author-name">Andrew paker</span>

                                                <p>Managing a popular open source project can be daunting at first. How do we maintain all these issues, or automatically trigger</p>

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
        <?php include_once 'includes/footer.php'; ?>
        
        

    </div>

    <?php include_once 'includes/script.php' ?>

</body>
</html>