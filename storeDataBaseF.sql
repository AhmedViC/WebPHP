drop database store;
create database store;
use store;

CREATE TABLE Cities (

CityID int not null auto_increment primary key,
CityName varchar(30)

);
CREATE Table Customer(
C_id int auto_increment primary key,
Fname varchar(20) ,
Lname varchar(20),
email varchar(30),
u_pass varchar(100),
birthdate date,
phoneNumber varchar(10),
district varchar(30),
City_id int,
 foreign key (City_id) REFERENCES Cities(CityID)


);

CREATE TABLE Storeadmin(
email varchar(30) primary key,
id char(5) not null,
fname varchar(20),
lname varchar(20),
adminpass varchar(100),
birthdate date
);
  
CREATE TABLE Orders(


OrderID int auto_increment primary key,
CustomerID int not null,
 foreign key (CustomerID) REFERENCES customer(C_id)
 
);
CREATE TABLE store.category (
  Category_ID INT NOT NULL,
  Category_Name VARCHAR(45) NOT NULL,
  Brand VARCHAR(45) NOT NULL,
  PRIMARY KEY (Category_ID));
  



  CREATE TABLE store.products (
  Product_ID INT NOT NULL,
  Name VARCHAR(45) NOT NULL,
  price int,
  Picture VARCHAR(45),
  Stock INT NOT NULL,
  p_description VARCHAR(200),
  Category int ,
  
  foreign key (Category) REFERENCES category( Category_ID),
  PRIMARY KEY (Product_ID));
  

  
CREATE TABLE OrdersDATA(
OrderedID int ,
  foreign key (OrderedID) REFERENCES Orders(OrderID),
  ProductID int not null,
 foreign key (ProductID) REFERENCES PRODUCTS( Product_ID),
Quantity int not null
  
  

);


CREATE TABLE Bill(

BillNo int auto_increment primary key,
Total_price int not null,
date_purchase date,
CustomerEmail varchar(30),
CustomerID int not null,
 foreign key (CustomerID) REFERENCES customer(C_id),
 
OrderID int ,
 foreign key (OrderID) REFERENCES orders(OrderID)


);

use store;
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES
 (11112,'Mobiles & Accessories','Samsung')
,(11113,'Mobiles & Accessories','Apple')
,(11114,'Mobiles','Sony')
,(11115,'Mobiles','Huawei')
,(11116,'Mobiles','Lenovo')
,(11117,'Laptops & Accessories','Apple')
,(11118,'Laptops & Accessories','Huawei')
,(11119,'Laptops & Accessories','Lenovo')
,(11120,'printed Books','null.')
,(11121,' Digita Books','null.')
,(11122,'Accessories','null.');


use store;
INSERT INTO `cities` (`CityID`,`CityName`) VALUES 
(755,'ALQTIF'),
(766,'KHOBAR'),
(788,'DAMMAM');

UPDATE `store`.`products` SET `p_description` = 'Samsung Galaxy S20, the smallest of the S20 family, comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage. T' WHERE (`Product_ID` = '46');

use store;
INSERT INTO `products` (`Product_ID`,`Name`,`price`,`Picture`,`Stock`,`Category`) VALUES (46,'Galaxy S20',2000,'images/SamsungS20.jpeg',55,11112)
,(47,'Galaxy S20 plus',2000,'images/iphone.jpg',68,11112)
,(48,'Galaxy S21 ultra',2000,'images/iphone.jpg',32,11112)
,(49,'Galaxy Z Flip',2000,'images/Flipz.png',29,11112)
,(56,'Iphone X',2000,'images/iphone.jpg',64,11113)
,(57,'Iphone 11',2000,'images/iphone.jpg',66,11113)
,(58,'Iphone 11plus',2000,'images/iphone.jpg',45,11113)
, (59,'Iphone 13 MAX',2000,'images/iphone.jpg',32,11113)
,(72,'MateBook E',2000,'images/MateBookE.png',60,11118)
, (73,'MateBook 14',2000,'images/iphone.jpg',25,11118)
,(74,'MateBook 14s',2000,'images/iphone.jpg',30,11118)
,(75,'Creator 7i',2000,'images/iphone.jpg',25,11119)
, (76,'V14 Gen2',2000,'images/iphone.jpg',22,11119)
,(77,'ThinkBook 15p',2000,'images/iphone.jpg',27,11119);
INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('111', 'ALRIYADH');
INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('222', 'JEDDAH');
INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('333', 'ALHASA');
INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('999', 'JAZAN');
INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('011', 'ABHA');






INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Ahmed', 'AlMAGHREBI', 'ahmed@gmail.com', '1234', '1999-01-01', '0667777777', 'Hay alshati', '788');
INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Abdo', 'Alzahrani', 'abdo@gmail.com', '1234', '1999-01-01', '0667717777', 'Hay alshati', '788');
INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Mohammed', 'AlGhawez', 'mo@gmail.com', '1234', '1999-01-01', '0667227777', 'Salem', '755');
INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Hussain', 'Naji', 'ha@gmail.com', '1234', '1999-01-01', '0667217777', 'Salem', '755');
INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Salam', 'Kamal', 'mo1@gmail.com', '1234', '1999-01-01', '0667227777', 'Alarjan', '766');
INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Ali', 'Kamal', 'saaaa12@gmail.com', '1234', '1999-01-01', '0667220077', 'Alarjan', '766');
INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Hakeem', 'Saud', 'Hakeem@gmail.com', '1234', '1999-01-01', '0667229877', 'Alarjan', '766');
INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Salman', 'Kamal', 'saal11@gmail.com', '1234', '1999-01-01', '0667227722', 'Alarjan', '766');
