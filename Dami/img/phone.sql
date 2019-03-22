set names utf8;


USE dami;
drop table if EXISTS phone;
CREATE table  phone(
    pid int not null auto_increment PRIMARY key ,
    ptype varchar(30),
    price int,
    capacity varchar(20),
    color varchar(20),
    picture varchar(50),
    stock int
);

insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"iPhone X","8316","64GB","gray","../img/iphone-x-spacegray-attach-2017.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"iPhone X","8316","64GB","silver","../img/iphone-x-silver-attach-2017.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"iPhone X","9605","256GB","gray","../img/iphone-x-spacegray-attach-2017.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"iPhone X","9605","256GB","silver","../img/iphone-x-silver-attach-2017.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2699","64GB","white","../img/xiaomi8-white-64g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2999","128GB","white","../img/xiaomi8-white-128g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","3299","256GB","white","../img/xiaomi8-white-256g.jpg",999);

insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2699","64GB","blonze","../img/xiaomi8-blonze-64g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2999","128GB","blonze","../img/xiaomi8-blonze-128g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","3299","256GB","blonze","../img/xiaomi8-blonze-256g.jpg",999);

insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2699","64GB","blue","../img/xiaomi8-blue-64g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2999","128GB","blue","../img/xiaomi8-blue-128g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","3299","256GB","blue","../img/xiaomi8-blue-256g.jpg",999);

insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2699","64GB","black","../img/xiaomi8-black-64g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","2999","128GB","black","../img/xiaomi8-black-128g.jpg",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"xiaomi8","3299","256GB","black","../img/xiaomi8-black-256g.jpg",999);

insert into phone  values(null, 'honor10', 2599, '6GB+64GB', 'red', '../img/hw_ryv10.jpg', 100);
insert into phone  values(null, 'honor10', 2599, '6GB+64GB', 'pink', '../img/hw_rx9.jpg', 100);
insert into phone  values(null, 'honor10', 2599, '6GB+64GB', 'blue', '../img/hw_ry8-5.jpg', 100);
insert into phone  values(null, 'honor10', 2599, '6GB+64GB', 'black', '../img/hw_ry8-6.jpg', 100);

insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","3755","32GB","red","../img/red.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","4548","64GB","red","../img/red.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","3755","32GB","purple","../img/purple.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","4548","64GB","purple","../img/purple.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","3755","32GB","black","../img/black.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","4548","64GB","black","../img/black.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","3755","32GB","special","../img/special.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15","4548","64GB","special","../img/special.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15 MENG","4548","32GB","red","../img/mengred.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15 MENG","5348","64GB","red","../img/mengred.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15 MENG","4548","32GB","purple","../img/mengpurple.png",999);
insert INTO phone (pid,ptype,price,capacity,color,picture,stock)
values(null,"OPPO R15 MENG","5348","64GB","purple","../img/mengpurple.png",999);