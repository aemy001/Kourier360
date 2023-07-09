<!DOCTYPE html>
<html>
    <head>
        <title>KOURIER-360 - Contact</title>
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
    </head>
    <body id="home">

        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
          <?php  include('header.php');?>
          

         
            <!-- /.Header -->

            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> contact us </h2>
                                    <p class="fs-16 no-margin"> Get in touch with us easily </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="index.php" class="gray-clr">Home</a></li>                                   
                                    <li class="active">contact</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Contact Us -->
                <section class="contact-page pad-30">                    
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-1">
                            <ul class="contact-detail title-2 pt-50">
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Karachi - Pak:</span> <p class="gray-clr"> +92 317 2803794 <br> mail@360.com </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>Islamabad - Pak:</span> <p class="gray-clr"> +92 311 8354627 <br> info@360.com </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Support - Pak:</span> <p class="gray-clr"> support@go.com </p> </li>
                                </ul>
                           </div>
 
                            <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                                <div class="calculate-form">
                                <form class="row" id="contact-form" onsubmit="formValidate()">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3">
                                                <label class="title-2">Name</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="name" placeholder="Your Name" class="form-control">
                                                <span id="en" style="display: block;color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3">
                                                <label class="title-2">Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" id="email" placeholder="Your Email" class="form-control">
                                                <span id="ee" style="display: block;color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3">
                                                <label class="title-2">Phone</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="tel" id="phone" placeholder="Your Number" class="form-control">
                                                <span id="ep" style="display: block;color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3">
                                                <label class="title-2">Message</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea placeholder="Your Message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                                <span id="em" style="display: block;color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-9 col-xs-12 pull-right">
                                                <button name="submit" id="submit_btn" class="btn-1"> send message </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Us -->

                <!-- Contact Map -->
                <section class="container-fluid">
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14472.557791145513!2d67.033047!3d24.927319!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1667141832410!5m2!1sen!2s"
                         width="1318" height="450" style="border:1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    
                </section>
                <!-- /.Contact Map -->

            </article>
            <!-- /.Content Wrapper -->

            <!-- Footer -->
      <?php include('footer.php'); ?>
       <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> GO </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                            <form class="login">
                                <div class="form-group"><input type="text" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in now </button>
                                </div>
                            </form>
                            <a href="#" class="gray-clr"> Forgot Passoword? </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don’t have an account? </a>  
                        <h2 class="title-2"> <a href="#" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->
        <script>
            function formValidate() {
                event.preventDefault();
                var user = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var num = document.getElementById("phone").value;
                var subj = document.getElementById("message").value;
                if (user == "") {
                    document.getElementById("en").innerHTML = "*Enter atleast one character"
                    return false;
                }
               else if (!isNaN(user)) {
                    document.getElementById("en").innerHTML = "*Number is not allowed"
                    return false;
                }
              else  if (user.length <= 2) {
                    document.getElementById("en").innerHTML = "*Name should not be less than two characters"
                    return false;
                }
               else if (email == "") {
                document.getElementById("en").innerHTML = ""
                    document.getElementById("ee").innerHTML = "*Enter atleast one character"
                    return false;
                }
               else if (!isNaN(email)) {
                    document.getElementById("ee").innerHTML = "*Number is not allowed"
                    return false;
                }
               else if (email.length <= 3) {
                    document.getElementById("ee").innerHTML = "*Name should not be less than three characters"
                    return false;
                }
               else if (email.indexOf("@") <= 0) {
                    document.getElementById("ee").innerHTML = "*Please enter correct format"
                    return false;
                }
               else if (num == "") {
    
                    document.getElementById("ee").innerHTML = ""
                    document.getElementById("ep").innerHTML = "*Enter atleast one character"
                    return false;
                }
               else if (isNaN(num)) {
                    document.getElementById("ep").innerHTML = "*alphabet is not allowed"
                    return false;
                }
               else if (subj == "") {
                    
                    document.getElementById("ep").innerHTML = ""
                    document.getElementById("em").innerHTML = "*Enter atleast one character"
                    return false;
                }
               else if (!isNaN(subj)) {
                    document.getElementById("em").innerHTML = "*Number is not allowed"
                    return false;
                }
                alert("Message Has Been Sent");
            }
            
            
    
    
        </script>
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
        <!-- Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <!-- Theme JS -->
        <script src="assets/js/theme-ajax-mail.js" type="text/javascript"></script>
        <script src="assets/js/theme.js" type="text/javascript"></script>

    </body>
</html>
