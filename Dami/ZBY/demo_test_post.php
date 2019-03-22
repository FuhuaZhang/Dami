<?php
header("Content-type: text/html; charset=utf-8");
$type = isset($_POST['type']) ? htmlspecialchars($_POST['type']) : '';
// = isset($_POST['price']) ? htmlspecialchars($_POST['price']) : '';
$capacity = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';
$color = isset($_POST['shape']) ? htmlspecialchars($_POST['shape']) : '';
//$stock = isset($_POST['stock']) ? htmlspecialchars($_POST['stock']) : '';

//$conn = mysqli_connect("bj-cdb-h7hv63pe.sql.tencentcdb.com:63168", 'root', 'boyuanzhang0120', 'dami', 3306);
$conn = mysqli_connect("localhost", 'root', '', 'dami', 3306);

//$sql = "INSERT INTO phone (pid,ptype,price,capacity,color,picture,stock)
//values(null,'" . $type . "','.$price.','" . $capacity . "','" . $color . "','null','.$stock.')";
$pid = null;
$sql = "select pid from phone where ptype='{$type}' and capacity='{$capacity}' and color='{$color}'";
$result = mysqli_query($conn,$sql);
//$row=mysqli_fetch_assoc($result);
//echo json_encode($row);
if (mysqli_num_rows($result) > 0) {
    $row=mysqli_fetch_assoc($result);
    $pid = $row['pid'];
    echo $pid;
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>