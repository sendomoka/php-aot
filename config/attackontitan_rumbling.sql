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
    time int,
    image varchar(255)
);

CREATE TABLE death (
    id int PRIMARY KEY AUTO_INCREMENT,
    userid int,
    timelineid int,
    cause varchar(255),
    FOREIGN KEY (userid) REFERENCES user(id),
    FOREIGN KEY (timelineid) REFERENCES timeline(id)
);

INSERT INTO user VALUES (1, 'peasure', 'admin123', 'Peasure', 'Berg News - Eldian', 'peasure.png', 'Alive', 'Admin');