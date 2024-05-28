<?php session_start(); ?>
<div class="section header">
            <div class="header-top-section">
                <div class="container">
                    <div class="header-top-wrap">
                        <div class="header-top-content text-center delete">
                            <p>Samarqand shahar <span>Telafon dokoni</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-section">
                <div class="container-fluid custom-container">
                    <div class="header-bottom-wrap">
                        <div class="header-logo-menu">
                            <!--  Header Logo Start  -->
                            <div class="header-logo">
                                <a href="index.php"><img style="width: 160px; margin-left: 20px;" src="../assets/images/logotip1.jpg" alt="logo"></a>
                            </div>
                            <!--  Header Logo End  -->
                            <!--  Header Menu Start  -->
                            <div class="header-menu d-none d-lg-block">
                                <ul class="main-menu">
                                    <li class="active-menu">
                                        <a href="index.php">Bosh sahifa</a>
                                    </li>
                                    </li>
                                    <li>Smartfonlar
                                        <ul class="sub-menu">
                                            <li><a href="index-2.php?name=Apple">Apple</a></li>
                                            <li><a href="index-2.php?name=Samsung">Samsung</a></li>
                                            <li><a href="index-2.php?name=Huawei">Huawei</a></li>
                                            <li><a href="index-2.php?name=Oppo">Oppo</a></li>
                                            <li><a href="index-2.php?name=Nokia">Nokia</a></li>
                                            <li><a href="index-2.php?name=Redmi">Redmi</a></li>
                                            <li><a href="index-2.php?name=Vivo">Vivo</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="blog.php">Yangiliklar</a>
                                    <li><a href="xarid-qilinganlar.php">Xarid qilinganlar</a>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <!--  Header Menu End  -->

                        </div>


                        <!-- Header Meta Start -->
                        <div class="header-meta">
                            <div class="header-search d-none d-xl-block">
                                <form action="#">
                                    <input type="text" placeholder="Search Phone">
                                    <button><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>

                            <?php 
                                if($_SESSION['login']){
                            ?>
                            <div class="header-login d-none d-lg-block">
                                <a class="link" href=""><i class="far fa-user"></i> <?=$_SESSION['login']?></a>
                                <a class="link" href="../loginout.php">Chiqish</a>
                            </div>
                            <?php
                                }else{
                            ?>
                            <div class="header-login d-none d-lg-block">
                                <a class="link" href="login.php"><i class="far fa-user"></i> Login</a>
                                <a class="link" href="register.php">Register</a>
                            </div>
                            <?}?>

                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>
