<?php
header("Content-type: text/html; charset=utf-8");
	require_once "Smtp.class.php";
	//******************** 配置信息 ********************************
	$smtpserver = "ssl://smtp.163.com";//SMTP服务器ssl://smtp.qq.com
	$smtpserverport =465;//SMTP服务器端口
	$smtpusermail = "18821714615@163.com";//SMTP服务器的用户邮箱xxx@qq.com

    //获取用户填写的邮箱！！！
	$smtpemailto = $_POST['email'];//发送给谁
echo $smtpemailto;
	$smtpemailfrom="Dami商城";//发件人
	$smtpuser = "18821714615@163.com";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名xxx@qq.com
	$smtppass = "zhangruixue112";//SMTP服务器的用户密码
	$mailtitle = "Dami商城忘记密码";//$_POST['title'];邮件主题
    $reset = "http://localhost/Dami/forgetPassword/resetPassword.html";
	$mailcontent = "<h2>Dami商城，重置密码请点击：<h1 style='color:#ff9800'>".$reset."?email=".$smtpemailto."</h1></h2>";//$_POST['content']邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpemailfrom,$smtpusermail, $mailtitle, $mailcontent, $mailtype);
	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
		echo "<a href='forgetPassword.html'>点此返回</a>";
		exit();
	}
	echo "恭喜！邮件发送成功！！";
	echo "<a href='sendEmailSucceed.html'>点此返回</a>";
	echo "</div>";
?>