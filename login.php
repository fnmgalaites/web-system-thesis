<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Login &mdash; Tan Rental Apartments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" href="css/login.css">
    
    
  </head>
  <body>
  
    <form class="form-group" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="col-8 col-md-8 col-lg-4">
    <h1 class="mb-0"><a href="index" class="text-white h2 mb-0"><strong>Tan<span class="text-primary">.</span></strong></a></h1>
            </div>
    <center><br><br><br><br><br><br><br><br>
    <div class="logcard">
    <br>
    <h2>LOGIN</h2>
    <br>
    <label><b>USERNAME: </b></label>
    <input class="inpt" type="text" name="username" placeholder="Enter Username" id="username" required /><br><br>
    <label><b>PASSWORD: </b></label>
    <input class="inpt" type="password" name="password" placeholder="Enter Password" id="password" required/><br><br>
    <input class="btn btn-primary rounded px-4 py-2" type="submit" id="inputbnt" name="login_submit" value="Login">
    <br>
  </div><br><br></center>
  
  </body>



</html>