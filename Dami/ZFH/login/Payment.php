<?php
header("Content-type: text/html; charset=utf-8");
session_start();//登录系统开启一个session内容
$_SESSION["email"]="";
$email=$_REQUEST["email"];
//获取html中的用户名（通过post请求）
$password=$_REQUEST["password"];
//获取html中的密码（通过post请求）

$conn = mysqli_connect("localhost","root","", 'dami');
//连接mysql 数据库，账户名root ，密码root
if (!$conn) {
    die('数据库连接失败'.$mysqli_connect_error());
}

$dbemail=null;
$dbpassword=null;
$userId = null;
$sql = "select * from user where email ='{$email}'";
$result=mysqli_query($conn, $sql);
//查出对应用户名的信息
while ($row=mysqli_fetch_assoc($result)) {//while循环将$result中的结果找出来
    $userId=$row["userId"];
    $dbemail=$row["email"];
    $dbpassword=$row["password"];
}
if (is_null($dbemail))
{//用户名在数据库中不存在时跳回index.html界面
    echo '<script>alert("用户名不存在");window.location.href="login.html";</script>';
}
else {
    if ($dbpassword != $password){//当对应密码不对时跳回index.html界面
        echo '<script>alert("密码错误");window.location.href="login.html?email='.$email.'";</script>';
    }
    else {
        //将用户登录邮箱存到session中
        $_SESSION["userId"]=$userId;
        $_SESSION["email"]=$email;
        //echo "<script>alert('{}')"
        $_SESSION["code"]=mt_rand(0, 100000);
        //给session附一个随机值，防止用户直接通过调用界面访问welcome.php
        echo '<script type="text/javascript">window.location.href="../welcome.php";</script>';
    }
}
mysqli_close($conn);//关闭数据库连接，如不关闭，下次连接时会出错
?>
