create database binarymind;

CREATE TABLE users(
    id INT(10) NOT NULL PRIMARY KEY auto_increment,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pass VARCHAR(120) NOT NULL,
    phone VARCHAR(80) NOT NULL,
    pics VARCHAR(255) NOT NULL,
    statut int(1) NOT NULL
);

create table student(
    id int(10) not null primary key auto_increment,
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
    p4 varchar(255),
    statut int(1) NOT NULL,
    userID int(10),
    CONSTRAINT pk_usr FOREIGN KEY(userID) REFERENCES users(id)
);

CREATE TABLE events(
    id SMALLINT(11) NOT NULL PRIMARY KEY auto_increment,
    title VARCHAR(255) NOT NULL,
    description text,
    idUser int(10) NOT NULL,
    CONSTRAINT pk_usee FOREIGN KEY(idUser) REFERENCES users(id)
);

