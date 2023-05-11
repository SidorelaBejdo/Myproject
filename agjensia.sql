create database  agjensia;
use agjensia;

create table kontakt(
id int(10) not null PRIMARY KEY AUTO_INCREMENT,
 emri varchar(10),
 email varchar(20),
 mesazhi  varchar(100)
);

create table udhetimi(
    id_udhetimi int(10) not null PRIMARY KEY AUTO_INCREMENT,
    qyteti varchar(10),
    orari date,
    vendi varchar(10),
    cmimi int(11),
    perfshirja varchar(225),
    pershkrimi varchar(225),
    foto1 varchar(225),
    foto2 varchar(225),
    foto3 varchar(225)
    );

    create table admin(
    username varchar(20),
    password varchar(20)
    );