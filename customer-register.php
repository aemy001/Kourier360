<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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

      <?php
      include('header.php');
      
      ?>
      


        <?php

            include('config.php');


               $query = "SELECT * FROM `customer_login`";

               $result = mysqli_query($conn, $query);

               if (isset($_POST["add"])) {

                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];


                $query2 = "INSERT INTO `customer_login`(`username`, `email`, `password`, `phone`)
                 VALUES ('$username','$email','$password','$phone')";

                $result2 = mysqli_query($conn, $query2);

               }
        
        ?>








<div class="signup-form">
    <form method="post" onsubmit="return formValidateR()">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
		<input type="text" class="form-control" name="username" placeholder="User Name" id="name">
        <span id="username"></span>
	  	 </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" id="email">
            <span id="useremail"></span>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" id="pass">
            <span id="userpass"></span>
        </div>
		<div class="form-group">
            <input type="nuumber" class="form-control" name="phone" placeholder="Phone Number" id="num">
            <span id="usernum"></span>
        </div>        
       
		<div class="form-group">
            <input type="submit" name="add" class="btn btn-warning btn-lg btn-block" value="Register Now">
        </div>
    </form>
	<div class="text-center login">Already have an account? <a href="customer-login.php" style="color: green;">Sign in</a></div>
    <script>
            function formValidateR() {
                var name = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var pass = document.getElementById("pass").value;
                var num = document.getElementById("num").value;
                if (name == "") {
                    document.getElementById("username").innerHTML = "*Enter atleast one character";
                    return false;
                }
               else if (!isNaN(name)) {
                    document.getElementById("username").innerHTML = "*Number is not allowed";
                    return false;
                }
               else if (email == "") {
                    document.getElementById("username").innerHTML = "";
                    document.getElementById("useremail").innerHTML = "*Enter email";
                    return false;
                }
               else if (email.length <= 3) {
                    document.getElementById("useremail").innerHTML = "*Email should not be less than three characters";
                    return false;
                }
               else if (email.indexOf("@") <= 0) {
                    document.getElementById("useremail").innerHTML = "*Please enter correct format";
                    return false;
                }
                else if (pass == "") {
                    document.getElementById("useremail").innerHTML = "";
                     document.getElementById("userpass").innerHTML = "*Enter Password";
                     return false;
                 }
               else if (pass.length <= 3) {
                    
                    // document.getElementById("ep").innerHTML = ""
                    document.getElementById("userpass").innerHTML = "*Password is to short";
                    return false;
                }
               else if (num == "") {
                    document.getElementById("userpass").innerHTML = "";
                    document.getElementById("usernum").innerHTML = "*Enter number";
                    return false;
                }
               else if (num.length <= 10) {
                    document.getElementById("usernum").innerHTML = "*Enter Valid Number";
                    return false;
                }
               else if (num.length >= 12) {
                    document.getElementById("usernum").innerHTML = "*Enter Valid Number";
                    return false;
                }
            }
        </script>
</div>
 
  <!-- Footer -->
  <?php include('footer.php'); ?>


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