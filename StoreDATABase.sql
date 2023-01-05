
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
u_pass char(20),
birthdate date,
phoneNumber varchar(10),
district varchar(30),
City_id int,
 foreign key (City_id) REFERENCES Cities(CityID)


);

CREATE TABLE Storeadmin(

id char(5) primary key,
fname varchar(20),
lname varchar(20),
adminpass varchar(20),
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
  Picture VARCHAR(45),
  Stock INT NOT NULL,
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


  INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11112,'Mobiles & Accessories','Samsung');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11113,'Mobiles & Accessories','Apple');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11114,'Mobiles','Sony');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11115,'Mobiles','Huawei');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11116,'Mobiles','Lenovo');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11117,'Laptops & Accessories','Apple');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11118,'Laptops & Accessories','Huawei');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11119,'Laptops & Accessories','Lenovo');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11120,'printed Books','null.');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11121,' Digita Books','null.');
INSERT INTO `Category` (`Category_ID`,`Category_Name`,`Brand`) VALUES (11122,'Accessories','null.');

INSERT INTO `Cities` (`CityID`,`CityName`) VALUES (755,'ALQTIF');
INSERT INTO `Cities` (`CityID`,`CityName`) VALUES (766,'KHOBAR');
INSERT INTO `Cities` (`CityID`,`CityName`) VALUES (788,'DAMMAM');
ALTER TABLE `store`.`products` 
DROP FOREIGN KEY `products_ibfk_1`;
ALTER TABLE `store`.`products` 
CHANGE COLUMN `Category` `CategoryID` INT(11) NULL DEFAULT NULL ;
ALTER TABLE `store`.`products` 
ADD CONSTRAINT `products_ibfk_1`
  FOREIGN KEY (`CategoryID`)
  REFERENCES `store`.`category` (`Category_ID`);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (46,'Galaxy S20',NULL,55,11112);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (47,'Galaxy S20 plus',NULL,68,11112);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (48,'Galaxy S21 ultra',NULL,32,11112);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (49,'Galaxy Z Flip',NULL,29,11112);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (56,'Iphone X',NULL,64,11113);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (57,'Iphone 11',NULL,66,11113);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (58,'Iphone 11plus',NULL,45,11113);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (59,'Iphone 13 MAX',NULL,32,11113);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (72,'MateBook E',NULL,60,11118);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (73,'MateBook 14',NULL,25,11118);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (74,'MateBook 14s',NULL,30,11118);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (75,'Creator 7i',NULL,25,11119);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (76,'V14 Gen2',NULL,22,11119);
INSERT INTO `products` (`Product_ID`,`Name`,`Picture`,`Stock`,`CategoryID`) VALUES (77,'ThinkBook 15p',NULL,27,11119);

INSERT INTO `storeadmin` (`id`,`fname`,`lname`,`adminpass`,`birthdate`) VALUES ('4445','Ahmad','Al Sahli','4443','1987-12-15');
INSERT INTO `storeadmin` (`id`,`fname`,`lname`,`adminpass`,`birthdate`) VALUES ('4449','Ali','Alali','4447','1989-05-13');
create database store;
use store;




