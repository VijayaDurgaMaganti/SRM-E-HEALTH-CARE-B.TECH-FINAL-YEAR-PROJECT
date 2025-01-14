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
   <title>Home | SRM - <?php
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

                        <li><a class="active" href="#">Home</a></li>
                        <li><a data-scroll href="#about">About us</a></li>
                        <li><a data-scroll href="services.php">Services</a></li>
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


      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                        <br><br><br><br>
                        <a href="" class="typewrite"  data-period="2000" data-type='[ "Welcome to SRM E-Hospital", "This is a Fully Responsive website ","Final Year Project"]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
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
            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>What We Do</h4>
                     <h2>Clinical Services</h2>
                     <p class="lead">We provide the best service of all kind of treatments and surgery, best Doctors are available in us.</p>
                     <p>Best of all services with at low cost and with high accurate results and make sure our clients get there services properly.  </p>
                     <a href="services.html" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="images/about_03.jpg" alt="" class="img-responsive">
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Digital Control Center</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/ui.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/ui.png" alt="" class="img-responsive">
                     </div>
                     <h3>Best User Experience</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/dctr1.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/dctr1.png" alt="" class="img-responsive">
                     </div>
                     <h3>Multiple Departmental Services</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/clinic_03.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Specialist Physicians</h3>
                  </div>
                  <!-- end service -->
               </div>

            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                           <h4>PREMIUM FACILITIES</h4>
                           <p>To provide the best of all services with at low cost and we make sure our clients get there services properly.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                           <h4>DIGITAL DIAGNOSIS</h4>
                           <p>Most of the diagnosis processare done digitally, best lab technicians are available.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                           <h4>DETAILED SPECIALIST</h4>
                           <p>We have well experienced Doctors and Specialist to deal with any compicated surgery.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                           <h4>CHILDREN CARE CENTER</h4>
                           <p>We provide the best pediotric medication facilities</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                           <h4>FINE INFRASTRUCTURE</h4>
                           <p>We have well funished infrastructure with all digital facilities. </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/phone-icon.png" alt="#" /></span>
                           <h4>24x7 SERVICES</h4>
                           <p>Services are available 24X7 and in emergency cases we provide the ambulence service</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form"><br><br>
                     <h3><span>+</span><a href="services.php" target="_blank" id="apt"> Book Appointment</a></h3><br><br>
                      <img src="images/appt.jpg" width="320px">
                                       </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->

	  <!-- doctor -->

	  <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">

		<div class="heading">
               <span class="icon-logo"><img src="images/favicon1.png" alt="#"></span>
               <h2>Best E-Healthcare Platform</h2>
            </div>

            <div class="row dev-list text-center">

              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                  <div class="widget clearfix">
                      <img src="images/doc1.png" alt="" class="img-responsive img-rounded" width="300" height="400">
                      <div class="widget-title">
                          <h3>Dr. Dharani</h3>
                          <small>Orthopedics Expert</small>
                      </div>
                      <!-- end title -->
                      <p>Hello guys, I am Doctor Dharani from Vijavada with 5 years experience. I am an orthopedic.</p>

                      <div class="footer-social">
                          <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                          <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                          <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                          <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div><!--widget -->
              </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doc2.png" alt="" class="img-responsive img-rounded" width="300" height="400">
                        <div class="widget-title">
                            <h3>Dr. Sandhya </h3>
                            <small>Internal Diseases</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Doctor Sandhya from Hyderabad. I am senior art director and chief of pediatric department</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="widget clearfix">
                        <img src="images/doc1.png" alt="" class="img-responsive img-rounded" width="300" height="400">
                        <div class="widget-title">
                            <h3>Dr. Rahul</h3>
                            <small>Pulmonory Expert</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Doctor Rahul from Raydurga with 7 years experience in Pulmonology.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div>

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
