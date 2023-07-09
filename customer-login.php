<?php include('config.php');?>
<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kourier - LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css">
    <!-- Fonts Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/font-elegant/elegant.css">
    <!-- OwlCarousel2 Slider Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl.carousel.2/assets/owl.carousel.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">

    <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
<style>
body {
	color: #fff;

	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
    color: #fff;
}

.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
} 
.signup-form .login{
    color: #636363;
}   	
.signup-form a {
	color: #636363;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body id="home">
    <!-- Preloader -->
    <div id="preloader">

        <div class="small1">
            <div class="small ball smallball1"></div>
            <div class="small ball smallball2"></div>
            <div class="small ball smallball3"></div>
            <div class="small ball smallball4"></div>
        </div>


        <div class="small2">
            <div class="small ball smallball5"></div>
            <div class="small ball smallball6"></div>
            <div class="small ball smallball7"></div>
            <div class="small ball smallball8"></div>
        </div>

        <div class="bigcon">
            <div class="big ball"></div>
        </div>

    </div>
    <!-- /.Preloader -->


    <!-- Main Wrapper -->
    <main class="wrapper">

        <!-- Header -->
       <?php include('header.php'); ?>
       

         
        <!-- /.Header -->

        <?php

if(isset($_POST["login"]))
{


include "config.php";

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM `customer_login` WHERE `username` = '{$username}' AND `password` = '{$password}'";

$result =  mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        session_start();

        $_SESSION["username"] = $row["username"];
        $_SESSION["cust_id"] = $row["cust_id"];
       
       

        header("location:customer-details.php");


    }
}
else
{
    echo "username and password did not match";
}




}


?>




<div class="signup-form">
    <form method="POST" action="">
		<h2>Login</h2>
		
        <div class="form-group">
		<input type="text" class="form-control" name="username" placeholder="User Name" id="uname">
        <span id="u1"></span>
	  	 </div>
       
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" id="upass">
            <span id="up1"></span>
        </div>
	 
		<div class="form-group">
            <input type="submit" name="login" class="btn btn-warning btn-lg btn-block" value="Login">
        </div>
        <div>
            <p>If u don't have an account <a href="customer-register.php">SignUp</a>.</p>
        </div>
    </form>

</div>
     


  <!-- Footer -->
  <?php include('footer.php'); ?>
        <!-- /.Footer -->




<!-- Main Jquery JS -->
             <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Bootstrap Select JS -->
    <script src="assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <!-- OwlCarousel2 Slider JS -->
    <script src="assets/plugins/owl.carousel.2/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Sticky Header -->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- Wow JS -->
    <script src="assets/plugins/WOW-master/dist/wow.min.js" type="text/javascript"></script>
    <!-- Data binder -->
    <script src="assets/plugins/data.binder.js/data.binder.js" type="text/javascript"></script>

    <!-- Slider JS -->


    <!-- Theme JS -->
    <script src="assets/js/theme.js" type="text/javascript"></script>

</body>

</html>