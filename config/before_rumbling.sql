DROP DATABASE IF EXISTS attackontitan_rumbling;
CREATE DATABASE attackontitan_rumbling;
USE attackontitan_rumbling;

DROP TABLE IF EXISTS death;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS timeline;

CREATE TABLE user (
    id int PRIMARY KEY AUTO_INCREMENT,
    nickname varchar(50),
    password varchar(255),
    name varchar(50),
    fraction_ethnic varchar(100),
    avatar varchar(255),
    status varchar(20),
    role varchar(20)
);

CREATE TABLE timeline (
    id int PRIMARY KEY AUTO_INCREMENT,
    place varchar(50),
    details varchar(255),
    time varchar(10),
    undiscovered_death int,
    image varchar(255)
);

CREATE TABLE death (
    id int PRIMARY KEY AUTO_INCREMENT,
    userid int,
    timelineid int,
    cause varchar(255),
    image varchar(255),
    FOREIGN KEY (userid) REFERENCES user(id),
    FOREIGN KEY (timelineid) REFERENCES timeline(id)
);

INSERT INTO user VALUES 
(1, 'peasure', 'admin123', 'Peasure', 'Berg News - Eldian', 'peasure.png', 'Alive', 'Admin'),
(2, 'eren', '123', 'Eren Yeager', 'Yeagerist - Eldian', 'eren.png', 'Alive', 'User'),
(3, 'koslow', '123', 'Koslow', 'Military - Marley', 'koslow.png', 'Alive', 'User'),
(4, 'mikasa', '123', 'Mikasa Ackerman', 'Alliance - Eldian', 'mikasa.png', 'Alive', 'User'),
(5, 'colt', '123', 'Colt Grice', 'Military - Marley', 'colt.png', 'Alive', 'User'),
(6, 'falco', '123', 'Falco Grice', 'Warrior - Marley', 'falco.png', 'Alive', 'User'),
(7, 'porco', '123', 'Porco Galliard', 'Warrior - Marley', 'porco.png', 'Alive', 'User'),
(8, 'pixis', '123', 'Pixis Dot', 'Military - Eldian', 'pixis.png', 'Alive', 'User'),
(9, 'nile', '123', 'Nile Dok', 'Military - Eldian', 'nile.png', 'Alive', 'User'),
(10, 'zeke', '123', 'Zeke Yeager', 'Anti Marleyan - Marley', 'zeke.png', 'Alive', 'User'),
(11, 'ramzi', '123', 'Ramzi', 'Civil - Marley', 'ramzi.png', 'Alive', 'User'),
(12, 'halil', '123', 'Halil', 'Civil - Marley', 'halil.png', 'Alive', 'User'),
(13, 'floch', '123', 'Floch Forster', 'Yeagerist - Eldian', 'floch.png', 'Alive', 'User'),
(14, 'samuel', '123', 'Samuel', 'Yeagerist - Eldian', 'samuel.png', 'Alive', 'User'),
(15, 'daz', '123', 'Daz', 'Yeagerist - Eldian', 'daz.png', 'Alive', 'User'),
(16, 'connie', '123', 'Connie Springer', 'Alliance - Eldian', 'connie.png', 'Alive', 'User'),
(17, 'magath', '123', 'Magath Theo', 'Military - Marley', 'magath.png', 'Alive', 'User'),
(18, 'shadis', '123', 'Shadis Keith', 'Military - Eldian', 'shadis.png', 'Alive', 'User'),
(19, 'hange', '123', 'Hange Zoe', 'Alliance - Eldian', 'hange.png', 'Alive', 'User'),
(20, 'levi', '123', 'Levi Ackerman', 'Alliance - Eldian', 'levi.png', 'Alive', 'User'),
(21, 'armin', '123', 'Armin Arlert', 'Alliance - Eldian', 'armin.png', 'Alive', 'User'),
(22, 'jean', '123', 'Jean Kirstean', 'Alliance - Eldian', 'jean.png', 'Alive', 'User'),
(23, 'kiyomi', '123', 'Kiyomi Azumabito', 'Civil - Eldian', 'kiyomi.png', 'Alive', 'User'),
(24, 'historia', '123', 'Historia Reiss', 'Civil - Eldian', 'historia.png', 'Alive', 'User'),
(25, 'hitch', '123', 'Hitch Dreyse', 'Yeagerist - Eldian', 'historia.png', 'Alive', 'User'),
(26, 'reiner', '123', 'Reiner Braun', 'Alliance - Marley', 'reiner.png', 'Alive', 'User'),
(27, 'annie', '123', 'Annie Leonhart', 'Alliance - Marley', 'annie.png', 'Alive', 'User'),
(28, 'pieck', '123', 'Pieck Finger', 'Alliance - Marley', 'pieck.png', 'Alive', 'User'),
(29, 'gabi', '123', 'Gabi Braun', 'Warrior - Marley', 'gabi.png', 'Alive', 'User'),
(30, 'karina', '123', 'Karina Braun', 'Civil - Marley', 'karina.png', 'Alive', 'User'),
(31, 'leonhart', '123', 'Leonhart', 'Civil - Marley', 'leonhart.png', 'Alive', 'User'),
(32, 'finger', '123', 'Finger', 'Civil - Marley', 'finger.png', 'Alive', 'User'),
(33, 'yelena', '123', 'Yelena', 'Alliance - Marley', 'yelena.png', 'Alive', 'User'),
(34, 'onyan', '123', 'Onyankopon', 'Alliance - Marley', 'onyan.png', 'Alive', 'User');