<?php
if (!isset($_REQUEST['id'])) {
    header("Location: index.php");
}

// Include the database config file 
require_once 'dbConfig.php';

// Fetch order details from database 
$result = $db->query("SELECT r.*, c.first_name, c.last_name, c.email, c.phone FROM orders as r LEFT JOIN customers as c ON c.id = r.customer_id WHERE r.id = " . $_REQUEST['id']);

if ($result->num_rows > 0) {
    $orderInfo = $result->fetch_assoc();
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Status - PHP Shopping Cart</title>
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/core-style.css">

    <!-- Custom style -->
</head>

<body>
    <div>
        <header class="header_area">
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
                                <li><a href="home.php">Home</a>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

            </div>
        </header>
    </div><br>
    <div class="container">
        <center>
            <h1>ORDER STATUS</h1>
        </center><br>
        <div class="col-13">
            <?php if (!empty($orderInfo)) { ?>
                <div class="col-md-13">
                    <center>
                        <div class="alert alert-success">Your order has been placed successfully.</div>
                    </center>
                </div>

                <!-- Order status & shipping info -->
                <div class="row col-lg-12 ord-addr-info">
                    <div class="hdr">
                        <h3>Order Information</h3>
                        <p><b>Reference ID:</b> #<?php echo $orderInfo['id']; ?></p>
                        <p><b>Total:</b> <?php echo '$' . $orderInfo['grand_total'] . ' USD'; ?></p>
                        <p><b>Placed On:</b> <?php echo $orderInfo['created']; ?></p>
                        <p><b>Buyer Name:</b> <?php echo $orderInfo['first_name'] . ' ' . $orderInfo['last_name']; ?></p>
                        <p><b>Email:</b> <?php echo $orderInfo['email']; ?></p>
                        <p><b>Phone:</b> <?php echo $orderInfo['phone']; ?></p>
                    </div>
                </div>

                <!-- Order items -->
                <div class="row col-lg-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>QTY</th>
                                <th>Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Get order items from the database 
                            $result = $db->query("SELECT i.*, p.name, p.price FROM order_items as i LEFT JOIN tblproduct as p ON p.id = i.product_id WHERE i.order_id = " . $orderInfo['id']);
                            if ($result->num_rows > 0) {
                                while ($item = $result->fetch_assoc()) {
                                    $price = $item["price"];
                                    $quantity = $item["quantity"];
                                    $sub_total = ($price * $quantity);
                            ?>
                                    <tr>
                                        <td><?php echo $item["name"]; ?></td>
                                        <td><?php echo '$' . $price . ' USD'; ?></td>
                                        <td><?php echo $quantity; ?></td>
                                        <td><?php echo '$' . $sub_total . ' USD'; ?></td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="col-md-12">
                    <div class="alert alert-danger">Your order submission failed.</div>
                </div>
            <?php } ?>
        </div>

    </div><br><br><br><br><br><br><br><br><br>
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
</body>

</html>