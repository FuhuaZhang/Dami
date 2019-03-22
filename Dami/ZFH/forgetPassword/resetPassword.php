<?php
header("Content-type: text/html; charset=utf-8");
//通过传递的参数来获得email
//$par=$_SERVER['QUERY_STRING'];
//$par1 = explode('&', $par);
//$par2 = explode('=', $par1[0]);
//$email = $par2[1];

$email=$_POST["email"];
//$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
echo $email;
//$password=$_REQUEST["password"];
$password=$_POST["password"];
//获取html中的用户名（通过post请求）

$conn = mysqli_connect("localhost","root","", 'dami');
//连接mysql 数据库，账户名root ，密码root
if (!$conn) {
    die('数据库连接失败'.$mysqli_connect_error());
}

$sql = "update user set password='{$password}' where email ='{$email}'";
$result=mysqli_query($conn, $sql);
if($conn->query($sql) == true){
    echo '<script>alert("修改成功");window.location.href="../login/login.html"';
}
else{
    echo '<script>alert("修改失败");window.location.href="resetPassword.html"';
}
mysqli_close($conn);//关闭数据库连接，如不关闭，下次连接时会出错
?>
