
drop database if exists n0lami00;
create database n0lami00;
use n0lami00;




CREATE TABLE user (
    first_name VARCHAR(50) NOT NULL, 
    last_name VARCHAR(50) NOT NULL, 
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (username)
    );




CREATE TABLE info (
    username int primary key auto_increment,
    address CHAR(50) NOT NULL,
    zip CHAR(5) NOT NULL, 
    city CHAR(10) NOT NULL, 
    phone CHAR(10) NOT NULL
    );

    
INSERT IGNORE INTO user VALUES ('Mikko', 'Lainas', 'Miku', 'elmiku'),('Niko', 'Nistikko', 'Nipa', 'nipsu'),('Mikael','Mahti', 'Mika', 'akim')

INSERT INTO info (address, zip, city, phone) VALUES ('Reipastie', 90100, 'Oulu', 0506661666);