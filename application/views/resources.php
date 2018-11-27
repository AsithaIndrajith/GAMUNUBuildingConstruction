<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <link rel="icon" type="image/png" href='../../public/img/favicon.png'/>
        
    <!-- Title Page-->
    <title>Gamunu Builders</title>

    <!-- Fontfaces CSS-->
    <link href="../../public/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../public/vendors/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../public/vendors/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../public/vendors/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../public/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="index.html">
                            <img src="../../public/img/logo.png"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../../public/img/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="index">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="services">
                                <i class="fas fa-chart-bar"></i>Services</a>
                        </li>
                        <li class="active has-sub">
                            <a href="resources">
                                <i class="fas fa-table"></i>Resources</a>
                        </li>
                        
                        <li>
                            <a href="projects">
                                <i class="fas fa-chart-bar"></i>Projects
                            </a>
                        </li>
                                
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <!--  <span class="quantity"></span>-->
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have no news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    
                                                </div>
                                                <div class="content">
                                                    <h6></h6>
                                                    <p></p>
                                                    <span class="time"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <!-- <span class="quantity"></span>-->
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have no New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    
                                                </div>
                                                <div class="content">
                                                    <p></p>
                                                    <span></span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity"><?=$count?></span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have <?=$count?> Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <?php
                                                        foreach($notification as $row){
                                                            echo "<p>".$row['notification']."</p>
                                                    <span class='date'>".$row['notification']."</span>";
                                                        }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Gamunu Builders</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                
                                                <div>
                                                    <h5 class="name">
                                                        <a href="#">Gamunu Builders</a>
                                                    </h5>
                                                    <span class="email">GamunuBuilders@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?=$jobappliesCount?></h2>
                                                <span>new job applications</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?=$orderCount?></h2>
                                                <span>newly arrived orders</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?=$projectsCount?></h2>
                                                <span>ongoing projects</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>RS. <?=($totalEarnings->result_array())[0]['totalEarning']?></h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                               
                                <h2 class="title-1 m-b-25">Resources Offered 
                                     <button class="btn btn-primary" data-target='#addResource' data-toggle='modal'>
                                        <i class="zmdi zmdi-plus"></i>Add Resources</button>
                                </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>resource ID</th>
                                                <th>resource type</th>
                                                <th>resource name</th>
                                                <th>resource owner</th>
                                                <th>resource count</th>
                                                <th class="text-right">available</th>
                                                <th>status</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                            foreach($records as $row){
                                                echo "<tr>
                                                        <td>".$row['resource_id']."</td>
                                                        <td>".$row['resource_type']."</td>
                                                        <td>".$row['resource_name']."</td>
                                                        <td>".$row['resource_owner']."</td>    <td>".$row['resource_count']."</td>
                                                        <td class='text-right'>".$row['available']."</td>
                                                        <td><button data-target='#".$row['resource_id']."' data-toggle='modal' type='submit' class='btn btn-warning'>update</button></td>
                                                    </tr>";
                                            }                                        
                                            ?>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>Job Applications</h3>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message-list">
                                                
                                                <?php
                                                    foreach($jobapplies as $row){
                                                        echo "<div class='au-message__item'>
                                                    <div class='au-message__item-inner'>
                                                        <div class='au-message__item-text'>
                                                            <div class='avatar-wrap'>
                                                                <div style='border:1px solid grey;border-radius:20px;margin-top:9px;padding:10px'>
                                                                 ".$row['job_type']."
                                                                </div>
                                                            </div>
                                                            <div class='text'>
                                                                <h5 class='name'>".$row['worker_name']."</h5>
                                                                <p><i class='fa fa-phone'></i> ".$row['worker_phone']."</p>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div style:'text-align:left'>
                                                            <a href='addJobapply/".$row['worker_id']."/".$row['worker_name']."/".$row['worker_phone']."/".$row['job_type']."'><button type='submit' class='btn btn-primary' style='border-radius:50px' alt='Add'>+</button></a>&nbsp<a href='deleteJobApply/".$row['worker_id']."'><button style='border-radius:50px' class='btn btn-danger'>x</button></a>
                                                        </div>
                                                    </div>
                                                </div>";
                                                    }
                                                
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-5">
                                <h2 class="title-1 m-b-25">Ongoing Projects</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Location</td>
                                                        <td class='text-right'>Workers</td>
                                                    </tr>
                                                    <?php
                                                    
                                                    foreach($projectWorkers as $row){
                                                        echo "<tr>
                                                        <td>".$row['project_loc']."</td>
                                                        <td class='text-right'>".$row['worker_count']."</td>
                                                    </tr>";
                                                    }
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>Current Workers (<?=$workersCount?>)</h3>
                                        <button data-target='#addWorker
                                                             ' data-toggle='modal' class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        
                                        <div class="au-task-list js-scrollbar3">
                                            <?php
                                                
                                            foreach($worker as $row){
                                                echo "<div class='au-task__item au-task__item--danger'>
                                                <div class='au-task__item-inner style='padding:10px'>
                                                    <div style:'text-align:right'>
                                                        <a href='deleteWorkers/".$row['worker_id']."'><button class='btn btn-danger' style='border-radius:50px'>&times</button></a>
                                                    </div>
                                                    <h5 class='task'>
                                                        <p>".$row['worker_name']." -  ".$row['worker_type']."</p>
                                                        <p>".$row['worker_phone']."</p>
                                                        <p>".$row['worker_address']."</p>
                                                    </h5>
                                                    
                                                    
                                                </div>
                                            </div>";
                                            }
                                            
                                            
                                            ?>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Job Type</td>
                                                        <td class='text-right'>Workers</td>
                                                    </tr>
                                                    <?php
                                                    
                                                        echo "<tr>
                                                        <td>Masons</td>
                                                        <td class='text-right'>".$workerTypes['masons'][0]['masons']."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Electrisians</td>
                                                        <td class='text-right'>".$workerTypes['electrisians'][0]['electrisians']."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Welders</td>
                                                        <td class='text-right'>".$workerTypes['welders'][0]['welders']."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tile Bass</td>
                                                        <td class='text-right'>".$workerTypes['tile'][0]['tile']."</td>
                                                    </tr>";
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Tools</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Tool</td>
                                                        <td class='text-right'>Count</td>
                                                    </tr>
                                                    <?php
                                                        foreach($toolTypes as $row){
                                                           echo "<tr>
                                                                <td>".$row['resource_name']."</td>
                                                                <td class='text-right'>".$row['resource_count']."</td>
                                                            </tr>";        
                                                        }
                                                    
                                                        
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
        <div>
           <div class="modal fade" id="addResource" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><font style="font-family:arial"></font></button>
                        <h4 class="modal-title">Add Resources</h4>
                    </div>
                    <div class="modal-body">
                        <!--login form-->
                        <div style="text-align:center">
                            <img src="../../public/img/img-items/product-img/add-2.jpg" style="border-radius:20px;width:60%">
                        </div>
                        <form action="addResources" autocomplete="on" method="post">
                            <div class="form-group">
                                Resources Type
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter resources type" name="resource_type" required>
                            </div>

                            <div class="form-group">
                                Resources Name
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter resources name" name="resource_name" required>
                            </div>

                            <div class="form-group">
                                Resources Count
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter resources count" name="resource_count" required>
                            </div>
                            <div class="form-group">
                                Resources Owner
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter resources owner" name="resource_owner" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" style="width:100%" value="Add" name="submitLogin" required>
                            </div>
                        </form>
                        <!--end login form-->
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <!--end sign in modal-->
        
        <!--add worler modal-->
        <div>
           <div class="modal fade" id="addWorker" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><font style="font-family:arial"></font></button>
                        <h4 class="modal-title">Add Worker</h4>
                    </div>
                    <div class="modal-body">
                        <!--login form-->
                        <div style="text-align:center">
                            <img src="../../public/img/img-items/product-img/add-service.png" style="border-radius:20px;width:60%">
                        </div>
                        <form action="addWorkers" autocomplete="on" method="post">
                            <div class="form-group">
                                Worker Name
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter worker name" name="worker_name" required>
                            </div>

                            <div class="form-group">
                                Worker phone
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter worker phone number" name="worker_phone" required>
                            </div>

                            <div class="form-group">
                                Worker address
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter worker address" name="worker_address" required>
                            </div>

                            <div class="form-group">
                                Worker Job Type
                                <input style="border-radius:20px" type="text" class="form-control" placeholder="Enter job type" name="job_type" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" style="width:100%" value="Add" name="submitLogin" required>
                            </div>
                        </form>
                        <!--end login form-->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            foreach($records as $row){
                echo "<div class='modal fade' id=".$row['resource_id']." role='dialog'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal'><font style='font-family:arial'></font></button>
                        <h4 class='modal-title'>Update Resources</h4>
                    </div>
                    <div class='modal-body'>
                        <div style='text-align:center'>
                            <img src='../../public/img/img-items/product-img/add-2.jpg' style='border-radius:20px;width:40%'>
                        </div>
                        <!--login form-->
                        <form action='updateResources' autocomplete='on' method='post'>
                            <div class='form-group'>
                                Resource ID
                                <input style='border-radius:20px' type='text' class='form-control' value=".$row['resource_id']." name='resource_id' required readonly>
                            </div>
                            <div class='form-group'>
                                Resource Type
                                <input style='border-radius:20px' type='text' class='form-control' value=".$row['resource_type']." name='resource_type' required>
                            </div>
                            <div class='form-group'>
                                Resource Name
                                <input style='border-radius:20px' type='text' class='form-control' value=".$row['resource_name']." name='resource_name' required>
                            </div>
                            <div class='form-group'>
                                Resource Owner
                                <input style='border-radius:20px' type='text' class='form-control' value=".$row['resource_owner']." name='resource_owner' required>
                            </div>
                            
                            <div class='form-group'>
                                Resource Count
                                <input style='border-radius:20px' type='text' class='form-control' value=".$row['resource_count']." name='resource_count' required>
                            </div>
                            
                            <div class='form-group'>
                                Available
                                <input style='border-radius:20px' type='text' class='form-control' value=".$row['available']." name='available' required>
                            </div>
                            
                            <div class='form-group'>
                                <input type='submit' class='form-control btn btn-warning' style='width:100%' value='Update' name='submitLogin' required>
                            </div>
                            
                        </form>
                        <!--end login form-->
                    </div>
                    </div>
                </div>
            </div>";
            }
        
        ?>

    </div>

    <!-- Jquery JS-->
    <script src="../../public/vendors/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../public/vendors/bootstrap-4.1/popper.min.js"></script>
    <script src="../../public/vendors/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../public/vendors/slick/slick.min.js">
    </script>
    <script src="../../public/vendors/wow/wow.min.js"></script>
    <script src="../../public/vendors/animsition/animsition.min.js"></script>
    <script src="../../public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../public/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../public/vendors/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../public/vendors/circle-progress/circle-progress.min.js"></script>
    <script src="../../public/vendors/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../public/vendors/chartjs/Chart.bundle.min.js"></script>
    <script src="../../public/vendors/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../public/js/admin.js"></script>

</body>

</html>
<!-- end document-->
