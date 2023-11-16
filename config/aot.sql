DROP DATABASE IF EXISTS aot;
CREATE DATABASE aot;
USE aot;

CREATE TABLE user (
    id int PRIMARY KEY AUTO_INCREMENT,
    nickname varchar(50),
    name varchar(50),
    password varchar(255),
    avatar varchar(255),
    ethnic varchar(20),
    fraction varchar(50),
    job varchar(50),
    birthdate date,
    birthplace varchar(50),
    status varchar(20),
    details varchar(255),
    role varchar(20)
);

CREATE TABLE death (
    id int PRIMARY KEY AUTO_INCREMENT,
    userid int,
    cause varchar(255),
    date date,
    place varchar(255),
    details varchar(255),
    FOREIGN KEY (userid) REFERENCES user(id)
);

INSERT INTO user (name, password, telp, ethnic, fraction, job, birthdate, birthplace, status, role) VALUES
('Peasure','psr123','894374','Eldian','Royal Government','Journalist','824-02-28','Stohess District','Alive','Admin');