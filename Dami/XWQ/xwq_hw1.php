<?php
$conn=mysqli_connect('127.0.0.1','root','','dami',3306);
 mysqli_query($conn,"set names utf8");
 $sql="select * from huawei where color='black'";
 $result=mysqli_query($conn,$sql);
 if($result==false)
 {
 echo "err";
 }
 else{
 $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
 echo json_encode($rows);
 }
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

            if ($result) {
                $data = ["msg"=>"����ɹ�","state"=>200];
                echo json_encode($data);
            } else {
                $data = ["msg"=>"����ʧ��","state"=>400];
                echo json_encode($data);
            }
      mysqli_close($conn);

?>