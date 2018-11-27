<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>House Bulding Designs</title>

    <!-- Favicon  -->
    <link rel="icon" href="../../public/img/favicon.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../../public/css/css-items/core-style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="../../public/img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="../.."><img src="../../public/img/icon/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="../../"><img src="../../public/img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a>House Designs</a></li>
                    <li><a href="comminsoon">Office Designs</a></li>
                    <li><a href="comminsoon">Other Designs</a></li>
                </ul>
            </nav>
<!--
            Button Group 

            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">Discount</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
-->
        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                <?php
                    foreach($records as $row){
                        echo "<!-- Single Catagory -->
                                <div class='single-products-catagory clearfix'>
                                    <a href='placeorder/".$row['service_id']."'>
                                        <img src=".$row['service_image']." alt=''>
                                        <!-- Hover Content -->
                                        <div class='hover-content'>
                                            <div class='line'></div>
                                            <p>".$row['price']."</p>
                                            <h4>".$row['service_name']."</h4>
                                        </div>
                                    </a>
                                </div>";
                    }
                
                ?>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Place an order within this month for a <span>25% Discount</span></h2>
                        <p>
                        You can have great deal of discount if you  start building house with us in this month. So hurry up.
                        </p>
                        
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Leave a message">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    
    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="../../public/js/js-items/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../../public/js/js-items/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../../public/js/js-items/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../../public/js/js-items/plugins.js"></script>
    <!-- Active js -->
    <script src="../../public/js/js-items/active.js"></script>
    <!-- Three.js -->
    <script src="../../public/js/three.js/three.min.js"></script>

</body>

</html>