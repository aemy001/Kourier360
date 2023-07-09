<?php
include('config.php');
session_start();
require('auth-session.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Place Order</title>
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


    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">

    <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
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

        <div class=".col-lg-12 col-md-12 ">
                            <div class="title-wrap">
                                <h2 class="section-title no-margin text-center">Place Your Order</h2>
                            </div>
                            </div>
        <?php
                    
         if(isset($_SESSION['username']))

            {
                ?>
                <div class="container">
                <h4 class="text-right"><?php echo "Welcome". "<br>"  .$_SESSION['username'];?>
 
                <br>
                <a href="logout.php">Logout</a>
            </h4>
                </div>
            


        <?php
            }
        ?>
       

  <?php




  $query2 = "SELECT * FROM `branches`";
  $result2 = mysqli_query($conn,$query2);

if (isset($_POST["order"])) {
    $sname = $_POST["sname"];
    $cust_id = $_SESSION["cust_id"];
    $semail = $_POST["semail"];
    $sphone = $_POST["sphone"];
    $saddress = $_POST["saddress"];
    $scity = $_POST["scity"];
    $weight = $_POST["weight"];
    $courier = $_POST["courier"];
    $rname = $_POST["rname"];
    $remail = $_POST["remail"];
    $rphone = $_POST["rphone"];
    $raddress = $_POST["raddress"];
    $rcity = $_POST["rcity"];

   
        $query = "INSERT INTO `orders`(`cust_id`,`s_name`,`s_email`,`s_address`,`s_phone`, `s_city`, `r_name`, `r_email`, `r_address`, `r_phone`, `r_city`, `weight`, `courier_type`) 
        VALUES ('$cust_id','$sname','$semail','$saddress','$sphone','$scity','$rname','$remail','$raddress','$rphone','$rcity','$weight','$courier')";

        $result = mysqli_query($conn, $query);

}
    ?>
        <section class="contact-page pad-30">
            <form method="POST" class="row" id="contact-form">
                <div class="theme-container container">
                    <div class="row">

                        <!--------------------------------------------------------------------- sender form ----------------------------------------------------->

                        <div class="col-md-5 col-sm-6 col-md-offset-1">
                            <div class="title-wrap">
                                <h2 class="section-title no-margin text-center">sender details</h2>
                            </div>
                            <div class="calculate-form">

                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                    <div class="col-sm-9"> <input name="sname" class="form-control"></input></div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="semail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                    <div class="col-sm-9"> <input type="number" name="sphone" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Address: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="saddress" required placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2">From City: </label></div>
                                    <div class="col-sm-9"> 
                                    <select name="scity" class="form-control" required>
                                        <option value="">Select city</option>
                                                        <?php
                                                            while($row=mysqli_fetch_assoc($result2))
                                                            {
                                                        ?>
                                                        <option value="<?php echo $row['branch_id'];?>"><?php echo $row['branch_city'];?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Weight(kg): </label></div>
                                    <div class="col-sm-9"> <input type="number" name="weight" required placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Courier type: </label></div>
                                    <div class="col-sm-9">
                                        <select name="courier" class="form-control">
                                            <option value="Courier Type">Select Courier Type</option>
                                            <option value="Document">Documents</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!----------------------------------------------------------------- receiver form ----------------------------------------------------->

                        <div class="col-md-5 col-sm-6 col-md-offset-1 ">
                            <div class="title-wrap">
                                <h2 class="section-title no-margin text-center">receiver details</h2>
                            </div>
                            <div class="calculate-form">

                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="rname" required placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="remail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                    <div class="col-sm-9"> <input type="number" name="rphone" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Address: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="raddress" required placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2">To City: </label></div>
                                    <div class="col-sm-9"><input type="text" name="rcity" placeholder="" class="form-control"> 
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                            <div class="text-center">
                                <input type="submit" name="order" value="Place Order" id="submit_btn" class="btn-1">
                            </div>
                        </div>
                       
                    </div>
                </div>

                
            </form>
        </section>
<?php
include('footer.php');
?>
    </main>
    <!-- / Main Wrapper -->

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