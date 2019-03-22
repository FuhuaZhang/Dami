<?php
header("Content-type: text/html; charset=utf-8");
session_start();//登录系统开启一个session内容

$userId=$_REQUEST["userId"];

$conn = mysqli_connect("localhost","root","", 'dami');
//连接mysql 数据库，账户名root ，密码root
if (!$conn) {
    die('数据库连接失败'.$mysqli_connect_error());
}

$userName=null;

$sql = "select * from user where userId ='{$userId}'";
$result=mysqli_query($conn, $sql);
//查出对应用户名的信息
while ($row=mysqli_fetch_assoc($result)) {//while循环将$result中的结果找出来
    $userName=$row["name"];
}
if (is_null($userName))
{//用户名在数据库中不存在时跳回index.html界面
    echo '<script>alert("用户名不存在");window.location.href="../ZFH/login/login.html";</script>';
}
else {
        echo $userName;
}
mysqli_close($conn);//关闭数据库连接，如不关闭，下次连接时会出错
?>
