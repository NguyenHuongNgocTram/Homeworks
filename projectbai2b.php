
CREATE DATABASE UserManagement;
USE UserManagement;
CREATE TABLE users(
    id int PRIMARY KEY NOT null AUTO_INCREMENT,
    userName varchar(100),
    passwords varchar(200),
    fullName varchar(200)
);
INSERT INTO users VALUES(1,"tram","0123456789","Nguyen Huong Ngoc Tram");
INSERT INTO users VALUES(2, "admin", "123", "Nguyen A");
INSERT INTO users VALUES(3, "teo", "y23", "Le teo");