<?php
header("Content-type: text/html; charset=utf-8");
//session_start();
//$OrderId=Session["OrderId"];
$OrderId=1;
$conn=mysqli_connect("localhost",'root','','dami',3306);
$sql="set names utf8";
mysqli_query($conn,$sql);
$sql="select * from OrderProducts where OrderId='$OrderId'";
$result=mysqli_query($conn,$sql);
 $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($rows);
?>
