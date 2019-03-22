set names utf8;
drop database if exists dami;
create database Dami character set 'utf8' collate 'utf8_general_ci';

use Dami;
drop table if exists user;

create table user(
    id int auto_increment primary key,
    name varchar(30) not null,
    email varchar(30) not null unique,
    password varchar(30) not null,
    tel int(11) not null,
    province varchar(30) not null,
    city varchar(30) not null,
    town varchar(30) not null,
    detailAddress varchar(30) not null,
    postcode int(6) not null
    )engine=InnoDB default charset=utf8;

