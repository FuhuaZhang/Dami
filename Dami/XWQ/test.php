<?php
    mysqli_query($conn,"set names utf8");
    $conn=mysqli_connect('127.0.0.1','root','','dami',3306);
    header("Content-type: text/html; charset=utf-8");
    $sql="select * from huawei where color='black'";
    $result=mysqli_query($conn,$sql);
    $pid = $_GET['$sql.pid'];
    $ptype = $_GET['$sql.ptype'];
    $price = $_GET['$sql.price'];
    $capacity = $_GET['$sql.capacity'];
    $color = $_GET['$sql.color'];
    $picture = $_GET['$sql.picture'];
    $stock = $_GET['$sql.stock'];
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbName = "dami";
             if ($conn->connect_error) {
                 die("����ʧ��: " . $conn->connect_error);
             }
            echo "���ӳɹ�".'</br>';
            if (mysqli_query($conn, $sql)) {
                echo "��ӹ��ﳵ�ɹ�".'<br>';
            } else {
                echo "sql���ִ���: " . $sql . "<br>" . mysqli_error($conn).'<br>';
             }

            //$sql = "INSERT INTO dami (pid,ptype,price,capacity,color,picture,stock) VALUES ('".$pid. "', '".$ptype."', '".$price."', '".$capacity."', '".$color."', '".$picture."', '".$stock."')";

            if (mysqli_query($conn, $sql)) {
                $data = ["msg"=>"����ɹ�","state"=>200];
                echo json_encode($data);
            } else {
                $data = ["msg"=>"����ʧ��","state"=>400];
                echo json_encode($data);
            }
      mysqli_close($conn);

?>