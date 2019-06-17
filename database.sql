create database binarymind;

create table promo(
    id int not null primary key,
    nom varchar(120),
    prenom varchar(255),
    slug varchar(180),
    minidesc varchar(120),
    descript text,
    tel varchar(20),
    mail varchar(255),
    linkedin varchar(200),
    facebook varchar(200),
    instagram varchar(200),
    twitter varchar(200),
    siteweb varchar(120),
    specialisation varchar(255),
    bio text,
    picfront varchar(255),
    p1 varchar(255),
    p2 varchar(255),
    p3 varchar(255),
    p4 varchar(255)
);