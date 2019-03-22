<?php
header("Content-type: text/html; charset=utf-8");
 session_start();

//$email=Session["email"];
// $_SESSION['email']='1123644695';
 $email=$_SESSION['email'];
 echo $email;
?>

