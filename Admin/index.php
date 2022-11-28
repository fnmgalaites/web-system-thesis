<?php
include("conn.php");
session_start();
if(isset($_SESSION['username'])){
  $username = $username['username'];
}else{
  echo "<script>window.location.href='../';</script>";
}

if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];

  $authentication = mysqli_query($con, "SELECT * FROM logintb WHERE username='$username'");
  $fetch = mysqli_fetch_assoc($authentication);
  $acc_type = $fetch["acc_type"];

  if($acc_type !=1){
    echo "<script>window.location.href='../error';</script>";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home &mdash; Tan Rental Apartments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ALL BOOTSTRAPS -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/indexzxc.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

  <!-- FOR NAVIGATIONS -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index" class="text-white h2 mb-0"><strong>Tan<span class="text-primary">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span>
</a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index">Home</a>
                  </li>
                  <li><a href="about">About</a></li>
                  <li><a href="">Units</a></li>
                  <!-- <li class="has-children">
                    <a href="apartments.html">Apartments</a>
                    <ul class="dropdown arrow-top">
                      <li><a class="droph" href="#">Apartments</a></li>
                      <li><a class="droph" href="#">Rooms</a></li>
                      <li><a class="droph" href="#">Suites</a></li>
                      <li class="has-children">
                        <a class="droph" href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a class="droph" href="#">Menu One</a></li>
                          <li><a class="droph" href="#">Menu Two</a></li>
                          <li><a class="droph" href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li> -->
                  <li><a href="news">News</a></li>
                  <li><a href="contact">Contact</a></li>
                  <li><a href="logout">Logout</a></li>   
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <!-- FOR THE HEADER BACKGROUND -->
    
    <div class="site-blocks-cover overlay" style="background-image: url('images/labas5.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">THE LIFESTYLE YOU DESERVE</h1>
            <p class="mb-5">Block 4 Lot 13 St. Francis Homes 8 Subdivision, Brgy. Pooc, City of Santa Rosa, Laguna</p>
            <p><a href="#" class="btn btn-primary px-5 py-3">Take a Tour</a></p>
          </div>
        </div>
      </div>
    </div>

  <!-- FOR THE INFORMATION ABOUT THE APARTMENT RENTAL & THE UNITS -->

    <div class="container">
      <div class="featured-property-half d-flex">
        <div class="image" style="background-image: url('images/loobg1.jpeg')"></div>
        <div class="text">
          <h2>Property Information</h2>
          <p class="mb-5">Dito nakatira dati si Jose Rizal, dito rin siya kumain ng paborito niyang adobong pusit</p>
          <ul class="property-list-details mb-5">
            <li class="text-black">Property Name: <strong class="text-black">Unit G</strong></li>
            <li>Bedrooms: <strong>2</strong></li>
            <li>Total Area: <strong>1 Hectare</strong></li>
            <li>Category: <strong>Mansion</strong></li>
            <li>Lunch Date: October 32, 1970<strong></strong></li>
          </ul>
          <p><a href="#" class="btn btn-primary px-4 py-3">Get Details</a></p>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Browse Apartments</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
              officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-ml-3" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="unit-9">
              <div class="image" style="background-image: url('images/unita.jpeg');"></div>
              <div class="unit-9-content">
                <h2>UNITS A-F</h2>
                <span>$1M/night</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-ml-3" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="unit-9">
              <div class="image" style="background-image: url('images/unitg.jpeg');"></div>
              <div class="unit-9-content">
                <h2>UNIT G</h2>
                <span>$5M/night</span>
              </div>
            </a>
          </div>

          <div class="col-md-12 text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-primary">Browse All Apartments</a>
          </div>
        </div>
      </div>
    </div>
    

    
    <!-- <div class="site-section">

      <div class="container">

        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Featured Apartments</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        
        <div class="site-block-retro d-block d-md-flex">

          <a href="#" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
            <div class="image" style="background-image: url('images/img_2.jpg');"></div>
            <div class="unit-9-content">
              <h2>Baltimore Apartment</h2>
              <span>$600/night</span>
            </div>
          </a>

          <div class="col ml-auto">

            <a href="#" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
              <div class="image" style="background-image: url('images/img_3.jpg');"></div>
              <div class="unit-9-content">
                <h2>Austin Apartment</h2>
                <span>$290/night</span>
              </div>
            </a>

            <a href="#" class="col2-row2 unit-9 no-height" data-aos="fade-up" data-aos-delay="300">
              <div class="image" style="background-image: url('images/img_1.jpg');"></div>
              <div class="unit-9-content">
                <h2>Atlanta Apartment</h2>
                <span>$1,290/night</span>
              </div>
            </a>

          </div>

        </div>
        
      </div>
    </div> -->
    
    <!-- FOR THE NEWS AND EVENTS IN THE APARTMENT -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">News &amp; Events</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <a href="single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="single.html">Fugit nam obcaecati fuga itaque</a></h2>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="single.html">Fugit nam obcaecati fuga itaque</a></h2>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="single.html">Fugit nam obcaecati fuga itaque</a></h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FOR THE ICONS NAVIGATIONS -->

    <div class="bg-primary" data-aos="fade">
      <div class="container">
        <div class="row">
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
      </div>
    </div>

    <!-- ABOUT THE APARTMENT -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Apart</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit<br> vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum<br> totam quis blanditiis, minima minus odio!</p>
            </div>
            <div class="mb-5">
              <!-- <h3 class="footer-heading mb-4">Subscribe</h3>
              <form action="#" method="post" class="site-block-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary bg-transparent" placeholder="Enter your email"
                    aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary rounded-top-right-0" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div> -->
              <!-- </form> -->
            </div>
          </div>

        <!-- FOOTER NAVIGATIONS -->

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Apartments</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Featured Apartment</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Membership</a></li>
                </ul>
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>

          </div> -->

          <!-- <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Watch Live Streaming</h3>

              <div class="block-16">
                <figure>
                  <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                  <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div> -->

            

          </div>
          
      <!-- FOOTER COPYRIGHT -->

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; 2022
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- </p>
          </div> -->
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>