# virtuoso
FWT for 009

Update your DB config in config.php

make database virtuoso in the connected db 

#Make tables 
CREATE TABLE customer (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE emp (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    emailid VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
