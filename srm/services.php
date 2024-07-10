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
   <title>Services | SRM - <?php
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
                       <li><a class="active" href="services.php">Services</a></li>
                       <li><a data-scroll href="emergency.html">Emergency</a>
                       <li><a data-scroll href="myprofile.php">My Profile</a></li>
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


      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/room3.jpg');">
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12">
                 <div class="text-contant">
                    <h2>
                       <br><br><br><br>
                       <a href="" class="typewrite"  data-period="2000" data-type='[ "Welcome to SRM Services", "This is a Fully Responsive website ","Final Year Project"]'>
                       <span class="wrap"></span>
                       </a>
                    </h2>
                 </div>
              </div>
           </div>
           <!-- end row -->
        </div>
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
            </div>
            <!-- end title -->

            <!-- end row -->
            <hr class="hr1">

            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/pedia.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/pedia.png" alt="" class="img-responsive">
                     </div>
                     <h3>Pediatric department <hr><p>A pediatrician provides medical care for children, and also preventive measures for healthy growth and development. </p></h3>
                     <h3><b><hr><a href="appointment1.php" id="apt">➕ Book Appointment ➕</a></b></h3>
                  </div><br>
                  <!-- end service -->
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/genp.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/genp.png" alt="" class="img-responsive">
                     </div>
                     <h3>General physicians <hr><p>General surgeons are doctors who specialize in surgical procedures.A general surgeon is part of a surgical team</p></h3>
                     <h3><b><hr><a href="appointment2.php" id="apt">➕ Book Appointment ➕</a></b></h3>
                   </div><br><br>
                  <!-- end service -->
               </div>


               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/cardi.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/cardi.png" alt="" class="img-responsive">
                     </div>
                     <h3>Cardiology department<hr><p>A cardiologist treats chest pain, high blood pressure and heart failure and other heart and vascular issues.</p></h3>
                     <h3><b><hr><a href="appointment3.php" id="apt">➕ Book Appointment ➕</a></b></h3>
                   </div> <br><br>
                  <!-- end service -->
               </div>


               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/denti.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/denti.png" alt="" class="img-responsive">
                     </div>
                     <h3>Dentistry<hr><p>Dentists diagnose and treat problems with patients' teeth, gums, and related parts of the mouth.</p></h3>
                     <h3><b><hr><a href="appointment4.php" id="apt">➕ Book Appointment ➕</a></b></h3>
                   </div><br><br>
                  <!-- end service -->
               </div>


               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/psyc.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/psyc.png" alt="" class="img-responsive">
                     </div>
                     <h3>Psychiatrist<hr><p>Psychiatrists are specialized in mental health, including substance use disorders and treat both the mental and physical aspects.</p></h3>
                     <h3><b><hr><a href="appointment5.php" id="apt">➕ Book Appointment ➕</a></b></h3>
                  </div>
                  <!-- end service -->
               </div>


               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/pulmo.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/pulmo.png" alt="" class="img-responsive">
                     </div>
                     <h3>Pulmonology<hr><p>A pulmonologist is a physician who specializes in the respiratory system. He treats conditions of the respiratory system, especially of the lungs.</p></h3>
                     <h3><b><hr><a href="appointment6.php" id="apt">➕ Book Appointment ➕</a></b></h3>
                  </div>
                  <!-- end service -->
               </div>


               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/orth.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/orth.png" alt="" class="img-responsive">
                     </div>
                     <h3>Orthopedic Department<hr><p>Orthopedic physicians are specialized in injuries of the musculoskeletal system — which includes bones, joints, ligaments, nerves, and tendons.</p></h3>
                     <h3><b><hr><a href="appointment7.php" id="apt">➕ Book Appointment ➕</a></b></h3>

                  </div>
                  <!-- end service -->
               </div>


               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/endo.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/endo.png" alt="" class="img-responsive">
                     </div>
                     <h3>Endocrinology Department<hr><p>Endocrinologists can treat conditions like diabetes, thyroid diseases, metabolic disorders, osteoporosis, some cancers, and disorders</p></h3>
                       <h3><b><hr><a href="appointment8.php" id="apt">➕ Book Appointment ➕</a></b></h3>
                  </div>
                  <!-- end service -->
               </div>


            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- <div id="service" class="services wow fadeIn">
         <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
           <div class="appointment-form"><br><br>
              <h3><span>+</span><a href="appointment.html" target="_blank" id="apt"> Book Appointment</a></h3><br><br>
               <img src="images/appt.jpg" width="320px">
                                </div>
        </div>
      </div>
      </div>
      </div> -->

      <!-- end section -->

	  <!-- doctor -->



	  <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="tab-content">
                     <div class="tab-pane active fade in" id="tab1">
                        <div class="row text-center">
                           <div class="col-md-4">
                            <div class="pricing-table pricing-table-highlighted">
                                 <div class="pricing-table-header grd1">
                                    <h2>Management</h2>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-text">
                                    <p>Our hospital provides best of its service.</p>
                                 </div>
                                 <div class="pricing-table-features">
                                     <p>🩺 Well Experienced Doctors</p>
                                     <p>👨‍⚕️Good Male Staff</p>
                                     <p>👩‍⚕️Kind Ladies Staff</p>
                                     <p>🚑 24 x 7 service</p>
                                 </div>

                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="pricing-table pricing-table-highlighted">
                                 <div class="pricing-table-header grd1">
                                    <h2>Doctors</h2>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-text">
                                    <p>Profecient Doctors and <br>Specialists</p>
                                 </div>
                                 <div class="pricing-table-features">

                                     <P>✔Good Experience</P>
                                     <P>🤝Humbel</P>
                                     <P>💙Treat You Well</P>
                                     <P>🩺Gett well Soon</P>
                                 </div>

                              </div>
                           </div>
                           <div class="col-md-4">
                               <div class="pricing-table pricing-table-highlighted">
                                 <div class="pricing-table-header grd1">
                                    <h2>Patients</h2>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-text">
                                    <p>This is a perfect choice for you to healup.</p>
                                 </div>
                                 <div class="pricing-table-features">

                                     <P>🏥Clean &amp; Sanitized environment</P>
                                     <P>🛌 100+ Patients recovery</P>
                                     <P>🚑 24X7 Emergency services</P>
                                 </div>

                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end pane -->

                     <!-- end pane -->
                  </div>
                  <!-- end content -->
               </div>
               <!-- end col -->
            </div>
         </div>
      </div>

	  <!-- end doctor section -->

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
