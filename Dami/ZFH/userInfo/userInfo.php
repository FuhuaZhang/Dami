<?php

// ��������
$conn = mysqli_connect('localhost', 'root', '', 'dami');
// Check connection
if (!$conn) {
    die("����ʧ��: " . mysqli_connect_error());
}

//��ȡ�����д��ݵ�userId
$par=$_SERVER['QUERY_STRING'];
$par1 = explode('&', $par);
$par2 = explode('=', $par1[0]);
//$userId = $par2[1];
$userId =$_REQUEST['userId'];
$sql ="select * from user where userId = '{$userId}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // �������
    while($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
    //echo '<script>location.href="userInfo.html"</script>';
} else {
    echo '<script>location.href="homePage.html"</script>';
}


mysqli_close($conn);
?>