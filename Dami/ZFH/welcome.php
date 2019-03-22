<?php
header("Content-type: text/html; charset=utf-8");
	session_start ();
    //如果 var 存在并且值不是 NULL 则返回 TRUE，否则返回 FALSE。
	if (isset ( $_SESSION ["code"] )) 
	{
        if (isset($_SESSION ["userId"])){
            $userId = $_SESSION ["userId"];
            echo '<script type="text/javascript">window.location.href="../WAZ/NewDaMi.html?userId='.$userId.'";</script>';
        }
        else {
            echo '<script type="text/javascript">window.location.href="../WAZ/NewDaMi.html";</script>';
        }
	}
	else {

    }
?>