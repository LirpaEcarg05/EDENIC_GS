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
    <link rel="stylesheet" href="./css/team.css">

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
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <!-- <li><a href="single-product-details.html">Product Details</a></li> -->
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="plantcare.php">Plant Care</a></li>
                                    <li><a href="single-blog.html">About Us</a></li>
                                    <!-- <li><a href="regular-page.html">Regular Page</a></li> -->
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="plantcare.php">Plant Care</a></li>
                            <li><a href="contact.php">Contact</a>
                                <!-- <ul class="dropdown">
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="contact.php">Contact</a>
                            </li> -->

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
                    <a href=""><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="viewCart.php" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""><span class="badge badge-light mt-4"><?php echo $cart->total_items() > 0 ? $cart->total_items() : "0"; ?></span> </a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="single-blog-wrapper">

        <!-- Single Blog Post Thumb -->
        <div class="single-blog-post-thumb">
            <img src="img/bg-img/ab21.png" alt="">
        </div>

        <!-- Single Blog Content Wrap -->
        <div class="single-blog-content-wrapper d-flex">

            <!-- Blog Content -->
            <div class="single-blog--text">
                <center><h1>ABOUT US</h1></center>
                <br>
                <p>EDENIC is being in horticulture helps us build more sustainable gardens 
                    as it goes beyond just the aesthetics of the gardens we create.
                We design and build gardens ranging from condominium balconies, to township 
                developments – whether hardscape or softscape, indoor or outdoor.</p>

                <blockquote>
                    <h6><i class="fa fa-quote-left" aria-hidden="true"></i> We are dedicated in 
                    making plants accessible to you by hand-picking plants that would complement your space and 
                    deliver them at your doorstep and provide care guides specific to your chosen plants’ 
                    needs – allowing them not only to survive but also flourish.
                </h6>
                    <!-- <span>Liam Neeson</span> -->
                </blockquote>

                <p>We will work with you from conceptualization to execution to make sure that your space will 
                    be a reflection of your personality and specific needs. <b> Plants transform your space, 
                    elevate your mood, boost your creativity and even improve your health. </b> Whether you’re 
                    plant obsessed or a first time plant parent, we’ve got everything you need to keep your green 
                    friends happy, healthy and thriving. And you can also see our Key Features in the side. </p>
            </div>

            <!-- About US -->
            <div class="related-blog-post">
                <!-- Single Related Blog Post -->
                <div class="single-related-blog-post">
                    <img src="img/bg-img/ab22.png" alt="">
                    <a href="#">
                        <h5>Prep Nursery</h5>
                    </a>
                </div>
                <!-- Single Related Blog Post -->
                <div class="single-related-blog-post">
                    <img src="img/bg-img/ab23.png" alt="">
                    <a href="#">
                        <h5>Trained Workers</h5>
                    </a>
                </div>
                <!-- Single Related Blog Post -->
                <div class="single-related-blog-post">
                    <img src="img/bg-img/ab24.png" alt="">
                    <a href="#">
                        <h5>Production Nursery</h5>
                    </a>
                </div>
                <!-- Single Related Blog Post -->
                <div class="single-related-blog-post">
                    <img src="img/bg-img/ab25.png" alt="">
                    <a href="#">
                        <h5>In House Holticulturist</h5>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Key Features Area End ##### -->

<!-- ##The Team Start -->
<div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <!-- <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p> -->
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item bg-secondary">
                    <div class="box mt-4"><img class="rounded-circle" src="./img/team-img/daryll.JPG">
                        <h3 class="name">Daryll Vildosola</h3>
                        <p class="title">Store Manager</p>
                        <p class="description">Developing store strategies to raise customers' pool, expand 
                            store traffic and optimize profitability. Meeting sales goals by training, motivating, 
                            mentoring and providing feedback to store staff. Ensuring high levels of customers 
                            satisfaction through excellent service.</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item bg-secondary">
                    <div class="box mt-4"><img class="rounded-circle" src="./img/team-img/april.JPG">
                        <h3 class="name">April Grace Diez</h3>
                        <p class="title">Assistant Manager</p>
                        <p class="description">Assist the Retail Store Manager in planning 
                            and implementing strategies to attract customers. She is the one who coordinate 
                            daily customer service operations. Track the progress of weekly, monthly, quarterly 
                            and annual objectives. Monitor and maintain store inventory. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item bg-secondary">
                    <div class="box mt-4"><img class="rounded-circle" src="./img/team-img/aldrin.JPG">
                        <h3 class="name">James Aldrin Odiong</h3>
                        <p class="title">Sales Associate</p>
                        <p class="description">Drives sales through engagement of customers, suggestive selling, 
                            and sharing product knowledge. Greets and receives customers in a welcoming manner. 
                            Responds to customers' questions. Directs customers by escorting them to racks and 
                            counters.</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ##The Team Ean -->
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
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
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

    <!-- ##The team Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>