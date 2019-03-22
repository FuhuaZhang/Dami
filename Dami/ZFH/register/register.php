<?php
header("Content-type: text/html; charset=utf-8");
    session_start();

	//从提交页面获取数据
	$name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $tel=$_REQUEST["tel"];
    $province=$_REQUEST["province"];
    $city = $_REQUEST["city"];
    $town = $_REQUEST["town"];
    $detailAddress = $_REQUEST["detailAddress"];
    $postcode = $_REQUEST["postcode"];

	//连接数据库
//    $conn = mysqli_connect("bj-cdb-h7hv63pe.sql.tencentcdb.com:63168","root","boyuanzhang0120", 'dami');
    $conn = mysqli_connect("localhost", "root","", "dami");

    if (!$conn)
	{
      die('数据库连接失败'.$mysqli_connect_error());
    }

    $dbemail=null;
    $sql = "select * from user where email ='{$email}'";
    $result=mysqli_query($conn, $sql);
    while ($row=mysqli_fetch_assoc($result))
	{
      $dbemail=$row["email"];
    }

	//根据查询结果做选择
    if(!is_null($dbemail))
	{
	  echo "<script>alert('用户已存在');window.location.href='register.html';</script>";
    }
    $sql = "insert into user
            values(null,'{$name}','{$email}','{$password}','{$tel}', '{$province}','{$city}', '{$town}','{$detailAddress}','{$postcode}')";

    if(!mysqli_query($conn, $sql))
    {
      die("存入数据库失败") ;
    }else{
        //echo "<script>window.location.href='../login/login.html';</script>";//先跳出register文件夹所以先..
        echo '<script type="text/javascript">alert("注册成功");window.location.href="../login/login.html";</script>';
    }
    mysqli_close($conn);
?>

