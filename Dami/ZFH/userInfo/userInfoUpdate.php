<?php

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

	//根据查询结果做选择
    $sql = "update user
            set name='{$name}',password='{$password}',tel='{$tel}', province='{$province}',city='{$city}',town= '{$town}',detailAddress='{$detailAddress}',postcode='{$postcode}'
            where email='{$email}'";

    //$sql = "update user set name='{$name}' where email = '{$email}'";

    if(!mysqli_query($conn, $sql))
    {
      die("修改用户信息失败").mysqli_error($conn);
    }

    //echo "<script>window.location.href='../login/login.html';</script>";//先跳出register文件夹所以先..

    echo '<script type="text/javascript">alert("修改成功");window.location.href="../welcome.php";</script>';

    mysqli_close($conn);
?>

