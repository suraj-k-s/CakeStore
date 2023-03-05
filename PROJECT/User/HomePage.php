<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../Assets/Template/Main/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Template/Main/css/style.css" type="text/css">

    <?php
include("../Assets/Connection/Connection.php");
?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="../User/SearchProduct.php" class="search-switch"><img src="../Assets/Template/Main/img/icon/search.png" alt=""></a>
                <a href="#"><img src="../Assets/Template/Main/img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="../Assets/Template/Main/img/icon/cart.png" alt="">
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="../Assets/Template/Main/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>USD <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>EUR</li>
                        <li>USD</li>
                    </ul>
                </li>
                <li>ENG <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>Spanish</li>
                        <li>ENG</li>
                    </ul>
                </li>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                               
                            </div>
                            <div class="header__logo">
                                <a href="HomePage.php"><img src="../Assets/Template/Admin/assets/images/logo/logo.jpg"  style="height: 100px;width:150px;padding-bottom: 30px; alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="SearchProduct.php" class="search-switch"><img src="../Assets/Template/Main/img/icon/search.png" alt=""></a>
                                   
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="MyCart.php"><img src="../Assets/Template/Main/img/icon/cart.png" alt=""> <span></span></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="HomePage.php">Home</a></li>
                            
                            <li><a href="SearchProduct.php">Search Product</a></li>
                            <li><a href="MyCart.php">Cart</a></li>
                            <li><a href="MyBooking.php">My Booking</a></li>
                            <li><a href="#">Profile</a>
                              <ul class="dropdown">
                                  <li><a href="MyProfile.php">My Profile</a></li>
                                  <li><a href="EditProfile.php">Edit Profile</a></li>
                                  <li><a href="ChangePassword.php">Change Password</a></li>
                                  
                              </ul>
                          </li>
                          <li><a href="#">F&C</a>
                            <ul class="dropdown">
                                <li><a href="Complaint.php">Complaint</a></li>
                                <li><a href="ComplaintSolution.php">Complaint Solution</a></li>
                                <li><a href="Feedback.php">Feedback</a></li>
                                
                            </ul>
                        </li>
                            <li><a href="../Guest/Login.php">Logout</a></li>
                           
                       
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="../Assets/Template/Main/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="SearchProduct.php" style="z-index:1" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="../Assets/Template/Main/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="SearchProduct.php" style="z-index:1" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Cake shop</span>
                            <h2>Cakes and bakes from the house of Queens!</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Cake design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Class</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Recipes</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    
    <!-- Product Section Begin -->
   
    <!-- Product Section End -->

    <!-- Class Section Begin -->
   
    <!-- Class Section End -->

    <!-- Team Section Begin -->
    
    <!-- Team Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our client say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                <?php
                            $sel="select * from tbl_feedback f inner join tbl_user u on u.user_id=f.user_id inner join tbl_place p on p.place_id=u.place_id";
                            $row=$conn->query($sel);
                            while($data=$row->fetch_assoc())
                            {
                            ?>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                       
                            <div class="testimonial__author">
                            
                                <div class="testimonial__author__pic">
                                    <img src="../Assets/Files/User/<?php echo $data["user_photo"]?>" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5><?php echo $data["user_name"]?></h5>
                                    <span><?php echo $data["place_name"]?></span>
                                </div>
                            </div>
                            
                            <p><?php echo $data["feedback_details"]?></p>
                            
                        </div>
                        
                    </div>
                    <?php
                            }
                        ?>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Sweet moments are saved as memories.</h2>
                        </div>
                        <a href="https://www.instagram.com/deepz_cake_house_/?hl=en"></a>
                        <h5><i class="fa fa-instagram"></i> @deepz_cake_house_</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="../Assets/Template/Main/img/instagram/instagram-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="../Assets/Template/Main/img/instagram/instagram-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="../Assets/Template/Main/img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="../Assets/Template/Main/img/instagram/instagram-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="../Assets/Template/Main/img/instagram/instagram-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="../Assets/Template/Main/img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Map Begin -->
   
    <!-- Map End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="../Assets/Template/Main/img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Contact</h6>
                        <ul>
                            <li>Phone : 9847518789</li>
                            <li>Web : www.deepzcakehouse.com</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="../Assets/Template/Main/img/deepz_bgremove.png" style=" width: 70%;" alt=""></a>
                        </div>
                        
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            
                            <a href="https://www.instagram.com/deepz_cake_house_/?hl=en"><i class="fa fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by Jithin
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="../Assets/Template/Main/js/jquery-3.3.1.min.js"></script>
<script src="../Assets/Template/Main/js/bootstrap.min.js"></script>
<script src="../Assets/Template/Main/js/jquery.nice-select.min.js"></script>
<script src="../Assets/Template/Main/js/jquery.barfiller.js"></script>
<script src="../Assets/Template/Main/js/jquery.magnific-popup.min.js"></script>
<script src="../Assets/Template/Main/js/jquery.slicknav.js"></script>
<script src="../Assets/Template/Main/js/owl.carousel.min.js"></script>
<script src="../Assets/Template/Main/js/jquery.nicescroll.min.js"></script>
<script src="../Assets/Template/Main/js/main.js"></script>
</body>

</html>