<?php
header("Content-type: text/html; charset=utf-8");
   session_start();
    if (Session["email"] == null)
            {
               header("location:login.html");
           }
           else
           {
                $_SESSION['OrderId'] = $_POST['OrderId'];
               header("location:NewDamiPayMent.html");
           }
  ?>