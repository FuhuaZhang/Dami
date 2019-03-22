
use Dami;
create table OrderTable(
OrderId int ,
UserId  int,
totalprice float,
paymentMethod varchar(50),
email varchar(30),
Consignee varchar(30),
tel varchar(30),
province varchar(30),
city varchar(30),
town varchar(30),
detailAddress varchar(50),
postcode varchar(20),
target  varchar(50)
);

create table OrderProducts(
id int ,
OrderId int,
productsId int,
type varchar(50),
capacity varchar(20),
color varchar(20),
eachprice float,
picture varchar(50),
number int
);