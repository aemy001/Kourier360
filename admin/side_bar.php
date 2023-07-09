<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Kourier 360 - Admin</title>
<!-- <link rel="icon" href="img/mini_logo.png" type="image/png"> -->

<link rel="stylesheet" href="css/bootstrap1.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
 </div>
<div class="line_icon open_miniSide d-none d-lg-block">
<img src="img/line_img.png" alt="">
</div>

<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center"></div>
<li>
<!-- <a class="bell_notification_clicker" href="#"> <img src="img/icon/bell.svg" alt=""> -->
<!-- <span>2</span> -->
</a>

<!-- <div class="Menu_NOtification_Wrap">
        <div class="notification_Header">
            <h4>Notifications</h4>
        </div>
        <div class="Notification_body">

            <div class="single_notify d-flex align-items-center">
                <div class="notify_thumb">
                    <a href="#"><img src="img/staf/2.png" alt=""></a>
                </div>
                <div class="notify_content">
                    <a href="#"><h5>Cool Marketing </h5></a>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>

            <div class="single_notify d-flex align-items-center">
                <div class="notify_thumb">
                    <a href="#"><img src="img/staf/4.png" alt=""></a>
                </div>
                <div class="notify_content">
                    <a href="#"><h5>Awesome packages</h5></a>
                    <p>Lorem ipsum dolor sit amet</p>
                    </div>
            </div> -->

<!-- <div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt=""></a>
</div>
<div class="notify_content">
<a href="#"><h5>what a packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div> -->

<!-- <div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/2.png" alt=""></a>
</div>
<div class="notify_content">
<a href="#"><h5>Cool Marketing </h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div> -->

<!-- <div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt=""></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt=""></a>
</div>
<div class="notify_content">
<a href="#"><h5>what a packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>
</div>
<div class="nofity_footer">
<div class="submit_button text-center pt_20">
<a href="#" class="btn_1">See More</a>
</div>
</div>
</div> -->

</li>
<li>
<!-- <a class="CHATBOX_open" href="#"> <img src="img/icon/msg.svg" alt=""> <span>2</span> </a> -->
</li>
</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
<div class="profile_info_iner">
<div class="profile_author_name">
<p><?php
            if($_SESSION["role"]=="1")
            {
              echo "Admin";
            } 
            else{
              echo " Agent";
            }
       
            ?></p>
<h5><?php echo $_SESSION["username"]; ?></h5>
</div>
<div class="profile_info_details">
<!-- <a href="#">My Profile </a>
<a href="#">Settings</a> -->
<a href="logout.php">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
    <a class="large_logo" href="index.php"><img src="img/logo.png" alt="logo"></a>
    <div class="sidebar_close_icon d-lg-none">
    <i class="ti-close"></i>
    </div>
    </div>
    <ul id="sidebar_menu">
    <li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/dashboard.svg" alt="">
    </div>
    <div class="nav_title">
    <span>User Management </span>
    </div>
    </a>
    <ul>
    <!-- <li><a href="index_2.php">Default</a></li> -->
    <!-- <li><a href="index_3.php">Dark Sidebar</a><//li> -->
    <li><a href="index.php">Status Count</a></li>
    </ul>
    </li>
    
    <li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/3.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Pages</span>
    </div>
    </a>
    <ul>
    <li><a href="login.php">Login</a></li>
    <!-- <li><a href="resister.php">Register</a></li> -->
    <li><a href="error_400.php">Error 404</a></li>
    <li><a href="error_500.php">Error 500</a></li>
    <!-- <li><a href="forgot_pass.php">Forgot Password</a></li>
    <li><a href="gallery.php">Gallery</a></li> -->
    </ul>
    </li>
    <li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/4.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Users</span>
    </div>
    </a>
    <ul>
    <li><a href="user_list.php">Users List</a></li>

    <li><a href="add_new_user.php">Add New User</a></li>


    </ul>
    </li>
    <li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/11.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Couriers</span>
    </div>
    </a>
    <ul>
    <li><a href="order_view.php">All Courier Details</a></li>
    </ul>
    </li>
    
    <li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/5.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Customers</span>
    </div>
    </a>
    <ul>
    <li><a href="customer_list.php">Customers List</a></li>
    
    </ul>
    </li>
    
    <!-- <li class="">
    <a href="invoice.php" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/7.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Invoice</span>
    </div>
    </a>
    </li> -->
    
    
    <!-- <li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/11.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Themes</span>
    </div>
    </a>
    <ul>
    <li><a href="dark_sidebar.php">Dark Sidebar</a></li>
    <li><a href="light_sidebar.php">light Sidebar</a></li>
    </ul>
    </li> -->
    
    <!-- <li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/13.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Products</span>
    </div>
    </a>
    <ul>
    <li><a href="Products.php">Products</a></li>
    <li><a href="Product_Details.php">Product Details</a></li>
    <li><a href="Cart.php">Cart</a></li>
    <li><a href="Checkout.php">Checkout</a></li>
    </ul>
    </li> -->
    
    <li class="">
    <a class="has-arrow" href="form_email.php" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/21.svg" alt="">
    </div>
    <div class="nav_title">
    <span>Email</span>
    </div>
    </a>
    </li>
    
    </ul>
    </nav>


    <script src="js/jquery1-3.4.1.min.js"></script>

<script src="js/popper1.min.js"></script>

<script src="js/bootstrap1.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/count_up/jquery.waypoints.min.js"></script>

<script src="vendors/chartlist/Chart.min.js"></script>

<script src="vendors/count_up/jquery.counterup.min.js"></script>

<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.php5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>

<script src="vendors/datepicker/datepicker.js"></script>
<script src="vendors/datepicker/datepicker.en.js"></script>
<script src="vendors/datepicker/datepicker.custom.js"></script>
<script src="js/chart.min.js"></script>
<script src="vendors/chartjs/roundedBar.min.js"></script>

<script src="vendors/progressbar/jquery.barfiller.js"></script>

<script src="vendors/tagsinput/tagsinput.js"></script>

<script src="vendors/text_editor/summernote-bs4.js"></script>
<script src="vendors/am_chart/amcharts.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
<script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

<script src="vendors/apex_chart/apex-chart2.js"></script>
<script src="vendors/apex_chart/apex_dashboard.js"></script>

<script src="vendors/chart_am/core.js"></script>
<script src="vendors/chart_am/charts.js"></script>
<script src="vendors/chart_am/animated.js"></script>
<script src="vendors/chart_am/kelly.js"></script>
<script src="vendors/chart_am/chart-custom.js"></script>

<script src="js/dashboard_init.js"></script>
<script src="js/custom.js"></script>
</body>
</html>