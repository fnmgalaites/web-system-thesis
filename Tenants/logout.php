<?php
session_start();
$logout = md5($_SESSION['username']);
$username_md5 = md5($logout);
unset($_SESSION['username']);

session_unset();
session_destroy();

echo "Aba'y maghintay!";

echo "<script>window.location.href='../index';</script>";
exit();

?>