<?php
header("Content-type: text/html; charset=utf-8");
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Dami";

// ��������
$conn = mysqli_connect("127.0.0.1", "root","", "Dami","3306");
// �������
if (!$conn) {
    die("����ʧ��;" . mysqli_connect_error());
}
echo "���ӳɹ�";

//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('1', 'xiaomi8', '2699', '64GB', 'white', './xiaomi/xiaomi8-white-64g.jpg', '999')");
//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('2', 'xiaomi8', '2999', '128GB', 'white', './xiaomi/xiaomi8-white-128g.jpg', '999')");
//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('3', 'xiaomi8', '3299', '256GB', 'white', './xiaomi/xiaomi8-white-256g.jpg', '999')");
//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('4', 'xiaomi8', '2699', '64GB', 'blonze', './xiaomi/xiaomi8-blonze-64g.jpg', '999')");
//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('5', 'xiaomi8', '2999', '128GB', 'blonze', './xiaomi/xiaomi8-blonze-128g.jpg', '999')");
//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('6', 'xiaomi8', '3299', '256GB', 'blonze', './xiaomi/xiaomi8-blonze-256g.jpg', '999')");
//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('7', 'xiaomi8', '2699', '64GB', 'blue', './xiaomi/xiaomi8-blue-64g.jpg', '999')");
//mysql_query��"insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('8', 'xiaomi8', '2999', '128GB', 'blue', './xiaomi/xiaomi8-blue-128g.jpg', '999')");
//mysql_query��"insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('9', 'xiaomi8', '3299', '256GB', 'blue', './xiaomi/xiaomi8-blue-256g.jpg', '999')");
//mysql_query��"insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('10', 'xiaomi8', '2699', '64GB', 'black', './xiaomi/xiaomi8-black-64g.jpg', '999')");
//mysql_query( "insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('11', 'xiaomi8', '2999', '128GB', 'black', './xiaomi/xiaomi8-black-128g.jpg', '999')");
//mysql_query 9"insert into phone(pid,ptype,price,capacity,color,picture,stork) values ('12', 'xiaomi8', '3299', '256GB', 'black', './xiaomi/xiaomi8-black-256g.jpg', '999')");

mysqli_close($conn);
?>