<?php

$con=mysqli_connect("localhost","root","","rental_apartment_db");

error_reporting(1);

if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
    $check_username = mysqli_query($con, "SELECT * FROM logintb WHERE username='$username'");
    $fetch = mysqli_fetch_assoc($check_username);
    $acc_type=$fetch["acc_type"];
	$query1="select * from logintb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query1);
	if(mysqli_num_rows($result)==1){
        if($acc_type == "1"){
            header("Location:Admin/index");
        }if($acc_type == "2"){
            header("Location:Tenants/index");
        }
    }else{
        echo "<script>alert('Error Login, Try Again')</script>";
    }
    }

?>