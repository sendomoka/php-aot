DROP DATABASE IF EXISTS namadb;
CREATE DATABASE namadb;
USE namadb;

CREATE TABLE namatabel (
    id int(11) AUTO_INCREMENT,
    nama varchar(255),
    alamat varchar(255),
    email varchar(255),
    telepon varchar(255),
    status varchar(255),
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);