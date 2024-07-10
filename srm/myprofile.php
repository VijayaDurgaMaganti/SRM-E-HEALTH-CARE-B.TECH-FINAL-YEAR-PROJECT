<!DOCTYPE html>
<html lang="en">
    <head>
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>MyProfile | SRM - <?php
   include("connection.php");
   error_reporting(0);
   session_start();

   echo "".$_SESSION['username'];
   ?></title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/favicon1.png">
   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
        <style>
            #apt{
                text-decoration: none;
            color: white;
            font-size: 20px;
            text-decoration-line: none;
        }
        a:hover{
            color:white;
            text-decoration: none;
        }
            }
        </style>
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="index.html"><img src="images/flogo1.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:9448499047">9492043223</a></span>
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:srm.ehealth@gmail.com">srm.ehealth@gmail.com</a></span>
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">24X7</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>

                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                       <li><a class="active" href="#"><?php
                       include("connection.php");
                       error_reporting(0);
                       session_start();

                       echo "Welcome ".$_SESSION['username'];
                       ?></a></li>
                       <li><a data-scroll href="indexlog.php">Home</a></li>
                       <li><a data-scroll href="#about">About us</a></li>
                       <li><a data-scroll href="services.php">Services</a></li>
                       <li><a data-scroll href="emergency.html">Emergency</a>
                       <li><a class="active" href="myprofile.php">My Profile</a></li>
                       <li><a data-scroll href="index.html">Logout</a></li>


                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>


      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-p2.png');">

        </div>


         <!-- end container -->
      </div>
               <!-- end container -->

      <!-- end section -->

      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/favicon1.png" alt="#"></span>
               <h2>Best E-Healthcare Platform</h2>

               <form id="mc-form" class="mc-form" action="viewprofile.php" method="POST">
                  <div class="newsletter-form">
                     <input type="text" autocomplete="off" id="mc-email" value="<?php
                     include("connection.php");
                     error_reporting(0);
                     session_start();
                     echo "".$_SESSION['username'];
                     ?>" class="form-control" name="username">
                     <button class="mc-submit" type="submit" name="submit"><i class="fa fa-eye"></i></button>
                     <div class="clearfix"></div>
                     <!-- mailchimp-alerts Start -->
                     <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div>
                        <!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div>
                        <!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div>
                        <!-- mailchimp-error end -->
                     </div>
                     <!-- mailchimp-alerts end -->
                  </div>
               </form>
            </div>
            <!-- end title -->




            <!-- end row -->
         </div>
         <!-- end container -->
      </div>



      <!-- end section -->

      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/flogo1.png" alt=""></a>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> SRM E-Healthcare</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> srm.ehealth@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+91)9492043223</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form" action="subscribe.php" method="post">
                           <div class="newsletter-form">
                             <input type="email" id="mc-email" placeholder="Email address" name="Email_ID" required>
                              <button class="mc-submit" type="submit" name="submit"><i class="fa fa-paper-plane"></i></button>
                              <div class="clearfix"></div>
                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>&copy; 2022 SRM E-Healthcare. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
<!--                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>-->
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->

   </body>
</html>
