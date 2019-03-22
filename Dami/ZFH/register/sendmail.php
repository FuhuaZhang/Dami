<?php
header("Content-type: text/html; charset=utf-8");
	$par=$_SERVER['QUERY_STRING'];
    $par1 = explode('&', $par);
    $validateCode = explode('=', $par1[0])[1];
    $smtpemailto = explode('=', $par1[1])[1];
    //$validateCode=$_POST['validateCode'];
	require_once "Smtp.class.php";
	//******************** 配置信息 ********************************
	$smtpserver = "ssl://smtp.163.com";//SMTP服务器ssl://smtp.qq.com
	$smtpserverport =465;//SMTP服务器端口
	$smtpusermail = "18821714615@163.com";//SMTP服务器的用户邮箱xxx@qq.com
	//$smtpemailto = $_POST['email'];//发送给谁
	$smtpemailfrom="damiStroe";//发件人
	$smtpuser = "18821714615@163.com";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名xxx@qq.com
	$smtppass = "zhangruixue112";//SMTP服务器的用户密码
	$mailtitle = "欢迎注册Dami商城";//$_POST['title'];邮件主题
	$mailcontent = "<h2>欢迎注册Dami商城！感谢您的支持,您的验证码为：<h1 style='color:#ff9800'>".$validateCode."</h1></h2>";//$_POST['content']邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpemailfrom,$smtpusermail, $mailtitle, $mailcontent, $mailtype);
	//echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo '<script>alert("对不起，邮件发送失败！请检查邮箱填写是否有误。");window.close();</script>';

		//echo "<a href='in.html'>点此返回</a>";
		exit();
	}
	else{
		echo  '<script>window.close();</script>';
	}
?>