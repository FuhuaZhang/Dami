set names utf8;




USE dami;
drop table if EXISTS phone;
CREATE table  phone(
    pid int not null auto_increment PRIMARY key ,
    ptype varchar(30),
    price int,
    capacity varchar(20),
    color varchar(20),
    picture varchar(20),
    stock int
);

