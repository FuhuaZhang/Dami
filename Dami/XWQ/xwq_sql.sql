set names "utf8";
use dami;
create table hauwei(
pid int not null primary key,
ptype varchar(30),
price float,
capacity varchar(40),
color varchar(20),
picture varchar(60),
stock int
);

insert into huawei  values(13, 'honor10', 2599, '6GB+64GB', 'red', 'xwq_img/hw_ryv10.jpg', 100);
insert into huawei  values(14, 'honor10', 2599, '6GB+64GB', 'pink', 'xwq_img/hw_rx9.jpg', 100);
insert into huawei  values(15, 'honor10', 2599, '6GB+64GB', 'blue', 'xwq_img/hw_ry8-5.jpg', 100);
insert into huawei  values(16, 'honor10', 2599, '6GB+64GB', 'black', 'xwq_img/hw_ry8-6.jpg', 100);
