<?php
// Initialize shopping cart class 
include_once 'Cart.class.php';
$cart = new Cart;

// Include the database config file 
require_once 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>EDENIC</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <!-- <div class="html custom html_topbar_left">
            <small><b>HANDPICKED PLANTS DELIVER TO YOUR DOORSTEP • CEBU CITY DELIVERY ONLY • LOWER DELIVERY RATES <a class="form" href="loginAndsignup.html">Log in/Sign up</a></small>
        </div> -->

        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="home.php"><img src="img/core-img/LOGO5.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="shop.php">Shop</a>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="plantcare.php">Plant Care</a></li>
                                    <li><a href="aboutUs.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="plantcare.php">Plant Care</a></li>
                            <li><a href="contact.php">Contact</a>


                     
                        </ul>
                    </div>
                    <!-- Nav End -->
                   
                </div>
              
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
               
                <!-- Favourite Area -->
                <!-- <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div> -->
                <!-- User Login Info -->
                <div class="user-login-info">
                   
                        <!-- <a href=""><img src="img/core-img/user.svg" alt="" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"></a> -->
                    
                   
               <div class="classynav">
                        <ul>
                            
                            <li><a href=""><img src="img/core-img/user.svg" alt="" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"></a>
                                <ul class="dropdown">
                                    <li><a href="login.php?logout=true">Logout</a></li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
               </div>
            
                
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="viewCart.php" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""><span class="badge badge-light mt-4"><?php echo $cart->total_items() > 0 ? $cart->total_items() : "0"; ?></span> </a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/pc21a.gif);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>General Plant Care</h2>
                        <hr>
                    </div>
                    <div ><center>
                        <p>Though most of the plants available here is low-maintenance, some love <br> and attention is 
                        key to make sure that your plant lives a long, happy, and healthy life. <br>
                        It’s also important to note that just like you, plants experience stress too, and <br> it 
                        is quite normal for them to experience this as they adjust to their new homes. <br><br>
                        <b>See below for our quick tips on how to make your plants thrive:</b>
                        </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="img/bg-img/qt1.jpg" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">Quick Tips #1</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="#">Quick Tips #1</a>
                            </div>
                            <p>On average, indoor plants are watered once a week. But the best way is to check the soil 
                                by dipping your finger or using a stick. If the soil is still soggy or sticky, no need to 
                                water yet. Eventually, you will get the hang of your plant’s watering schedule.</p>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="img/bg-img/qt2.jpg" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">Quick Tips #2</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="#">Quick Tips #2</a>
                            </div>
                            <p>Water all the way through the pot until you see some seeping out from the drainage holes. 
                                This makes sure that the water reaches that plant’s root system.</p>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="img/bg-img/qt3.jpg" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">Quick Tip #3</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="#">Quick Tips #3</a>
                            </div>
                            <p>Plants should have a source of light (though the intensity varies). Plants placed along 
                                dark corners of the house or in the middle of offices should be rotated to areas near 
                                windows so that it can absorb some form of light.</p>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="img/bg-img/qt4.jpg" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">Quick Tips #4</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="#">Quick Tips #4</a>
                            </div>
                            <p>Dust may build up on the leaves. To bring back the shine of the leaves and to allow them to 
                                breathe, regularly wipe them with a damp soft cloth or if your space allows, give them a shower.</p>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="img/bg-img/qt5.jpg" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">Quick Tips #5</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content"> 
                            <!-- Post Title -->
                           <div class="hover-post-title">
                                <a href="#">Quick Tips #5</a>
                            </div>
                            <p>Getting rid of old-growth on your plants will help your plants grow again. This is 
                                kind of like how trimming the dead ends of your hair will help your hair grow again. 
                                After winter is when you’ll see some of the tips or leaves of your plant dying, so a 
                                simple plant haircut will do!</p>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="img/bg-img/qt6.jpg" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">Quick Tips #6</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="#">Quick Tips #6</a>
                            </div>
                            <p>Try to replicate your plant’s native habitat. This includes the type of soil you buy, 
                                humidity, temperature, water and sunlight. Researching your plant’s native habitat 
                                will help you discover the climate and terrain your plant prefers. Adapting this to 
                                the way you care for your plant will be beneficial for your plant’s longevity. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/LOGO5A.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="plantcare.php">Plant Care</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            ?>
<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>