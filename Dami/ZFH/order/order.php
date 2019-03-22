<?php

    //获取用户ID
    $userId =$_REQUEST['userId'];
    //$userId = '1';

    $conn = mysqli_connect("localhost","root","", "dami");
	//连接mysql 数据库，账户名root ，密码root
    if (!$conn) {
      die('数据库连接失败'.$mysqli_connect_error());
    }

    $sql = "SELECT orderproducts.*
            from orderproducts inner join ordertable
            on orderproducts.OrderId=ordertable.OrderId
            where ordertable.UserId=".$userId;
    $result=mysqli_query($conn, $sql);

    //将查询出来的信息转换成数组，再转换成json格式输出
    $arr = array();
    $i=0;
    while ($row=mysqli_fetch_assoc($result))
    {
        //assoc和array有区别,array似乎还包含数组下标
        //assoc:{"id":"3","OrderId":"0","productsId":"0","type":"xiaomi","capacity":"256gb","color":"red","eachprice":"2343","picture":"1.jpg","number":"3"}
        //array:{"0":"3","id":"3","1":"0","OrderId":"0","2":"0","productsId":"0","3":"xiaomi","type":"xiaomi","4":"256gb","capacity":"256gb","5":"red","color":"red","6":"2343","eachprice":"2343","7":"1.jpg","picture":"1.jpg","8":"3","number":"3"}
        //echo json_encode($row);
        $arr[] = $row;
    }

    echo json_encode($arr);
    mysqli_close($conn);//关闭数据库连接，如不关闭，下次连接时会出错
?>
