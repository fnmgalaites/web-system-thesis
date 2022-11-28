<?php
include("conn.php");

session_start();

if(isset($_SESSION["username"])){
  $username = $_SESSION["username"];
  $query_acc_type = mysqli_query($con, "SELECT * FROM logintb WHERE username='$username'");
  $get_acc_type = mysqli_fetch_assoc($query_acc_type);

  if($acc_type==1){
    echo "<script>window.location.href='Admin';</script>";
  }else{
    echo "<script>window.location.href='Tenants';</script>";
  }
  
}

  $username=$password="";
  $usernameErr=$passwordErr="";

  if(isset($_POST["login_submit"])){
    if(empty($_POST["username"])){
      $usernameErr = "Username is Required!";
    }else{
      $username = $_POST["username"];
    }

    if(empty($_POST["password"])){
      $passwordErr = "Password is Required!";
    }else{
      $password = $_POST["password"];
    }
  }

  if($username AND $password){
    $check_username = mysqli_query($con, "SELECT * FROM logintb WHERE username='$username'");
    $check_row = mysqli_num_rows($check_username);

    if($check_row > 0){
      $fetch = mysqli_fetch_assoc($check_username);
      $db_password = $fetch["password"];

      $acc_type = $fetch["acc_type"];

      if($acc_type=="1"){
        if($db_password == $password){
          $_SESSION["username"]=$username;
          echo "<script>window.location.href='Admin';</script>";
        }else{
          $passwordErr = "Your password is incorrect";
        }

      }else if($acc_type=="2"){
        if($db_password == $password){
          $_SESSION["username"]=$username;
          echo "<script>window.location.href='Tenants';</script>";
        }else{
          $passwordErr = "Your password is incorrect";
        }
      }

    }else{
      $usernameErr = "Username not registered!";
    }

  }

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