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
  ON UPDATE CASCADE ON DELETE CASCADE


);

CREATE TABLE Storeadmin(
email varchar(30) primary key,
id char(5) not null,
fname varchar(20),
lname varchar(20),
adminpass varchar(100),
birthdate date
);
  

CREATE TABLE category (
  Category_ID INT NOT NULL,
  Category_Name VARCHAR(45) NOT NULL,
  Brand VARCHAR(45) NOT NULL,
  PRIMARY KEY (Category_ID));
  



  CREATE TABLE products (
  Product_ID INT NOT NULL,
  Name VARCHAR(45) NOT NULL,
  price int,
  Picture VARCHAR(45),
  Stock INT NOT NULL,
  p_description VARCHAR(200),
  Category int ,
  
  foreign key (Category) REFERENCES category( Category_ID)
   ON UPDATE CASCADE ON DELETE CASCADE,
  PRIMARY KEY (Product_ID));
  
CREATE TABLE Orders(



OrderKey varchar(100) not null primary key,
CustomerID int not null,
 foreign key (CustomerID) REFERENCES customer(C_id)
 
);
  
CREATE TABLE OrdersDATA(
D_OrderKey VARCHAR(100) ,
  foreign key (D_OrderKey) REFERENCES Orders(OrderKey)
   ON UPDATE CASCADE ON DELETE CASCADE,
  ProductID int not null,
 foreign key (ProductID) REFERENCES PRODUCTS( Product_ID)
  ON UPDATE CASCADE ON DELETE CASCADE,
Quantity int not null,
primary key(D_OrderKey,ProductID)
  
  

);
CREATE TABLE PaymentInfo(
   
  Nameoncard VARCHAR(50),
  CreditCardNum VARCHAR(8),
  ExpMonth int,
  CVV VARCHAR(3),
  ExpYear int,
  D_OrderKey VARCHAR(100) primary key ,
  foreign key (D_OrderKey) REFERENCES Orders(OrderKey)
   ON UPDATE CASCADE ON DELETE CASCADE
 
  
  





);
CREATE TABLE BillingAddress(
    B_OrderKey VARCHAR(100) primary key ,

  foreign key (B_OrderKey) REFERENCES Orders(OrderKey)
   ON UPDATE CASCADE ON DELETE CASCADE,
   FullName VARCHAR(50),
  Eamil VARCHAR(50),
  b_Address VARCHAR(20),
  City VARCHAR(10),
  ZIP varchar(5)
);
CREATE TABLE Bill(

BillID int auto_increment primary key,
Total_price int not null,
date_purchase date,
CustomerEmail varchar(30),
CustomerID int not null,
 foreign key (CustomerID) REFERENCES customer(C_id)
  ON UPDATE CASCADE ON DELETE CASCADE,
 
  D_OrderKey VARCHAR(100)  ,
  foreign key (D_OrderKey) REFERENCES Orders(OrderKey)
   ON UPDATE CASCADE ON DELETE CASCADE
 
  
  


);


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



INSERT INTO `cities` (`CityID`,`CityName`) VALUES 
(755,'ALQTIF'),
(766,'KHOBAR'),
(788,'DAMMAM');

UPDATE `products` SET `p_description` = 'Samsung Galaxy S20, the smallest of the S20 family, comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage' WHERE (`Product_ID` = '46');


INSERT INTO `products` (`Product_ID`,`Name`,`price`,`Picture`,`Stock`,`Category`,`p_description`) 
VALUES (46,'Galaxy S20',2000,'images/SamsungS20.png',55,11112,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(47,'Galaxy S20 plus',2000,'images/samsungs20plus',68,11112,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(48,'Galaxy S21 ultra',2500,'images/iphone.jpg',32,11112,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(49,'Galaxy Z Flip',3000,'images/Flipz.png',29,11112,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(56,'Iphone X',1999,'images/iphone.jpg',64,11113,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(57,'Iphone 11',3000,'images/iphone11plus.png',66,11113,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(58,'Iphone 11plus',2000,'images/iphone.jpg',45,11113,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
, (59,'Iphone 13 MAX',2000,'images/iphone.jpg',32,11113,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(72,'MateBook E',4000,'images/MateBookE.png',60,11118,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
, (73,'MateBook 14',4300,'images/iphone.jpg',25,11118,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(74,'MateBook 14s',5000,'images/iphone.jpg',30,11118,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(75,'Creator 7i',7000,'images/iphone.jpg',25,11119,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
, (76,'V14 Gen2',2000,'images/iphone.jpg',22,11119,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage')
,(77,'ThinkBook 15p',2999,'images/thinkpad.png',27,11119,'Samsung Galaxy S20, the smallest of the S20 family, 
comes with a 6.2-inch display. Under the hood is Snapdragon 865/Exynos 990 chipset with 12GB RAM and 128GB storage');
INSERT INTO `cities` (`CityID`, `CityName`) VALUES ('111', 'ALRIYADH');
-- INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('222', 'JEDDAH');
-- INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('333', 'ALHASA');
-- INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('999', 'JAZAN');
-- INSERT INTO `store`.`cities` (`CityID`, `CityName`) VALUES ('011', 'ABHA');




delimiter //
create trigger stockUpdate after insert on ordersdata
for each row

begin
update products
set stock = stock - new.Quantity where new.productID=products.product_id;


end //

INSERT INTO `customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Ahmed', 'AlMAGHREBI', 'ahmed@gmail.com', '1234', '1999-01-01', '0667777777', 'Hay alshati', '111');
-- INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Abdo', 'Alzahrani', 'abdo@gmail.com', '1234', '1999-01-01', '0667717777', 'Hay alshati', '788');
-- INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Mohammed', 'AlGhawez', 'mo@gmail.com', '1234', '1999-01-01', '0667227777', 'Salem', '755');
-- INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Hussain', 'Naji', 'ha@gmail.com', '1234', '1999-01-01', '0667217777', 'Salem', '755');
-- INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Salam', 'Kamal', 'mo1@gmail.com', '1234', '1999-01-01', '0667227777', 'Alarjan', '766');
-- INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Ali', 'Kamal', 'saaaa12@gmail.com', '1234', '1999-01-01', '0667220077', 'Alarjan', '766');
-- INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Hakeem', 'Saud', 'Hakeem@gmail.com', '1234', '1999-01-01', '0667229877', 'Alarjan', '766');
-- INSERT INTO `store`.`customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES ('Salman', 'Kamal', 'saal11@gmail.com', '1234', '1999-01-01', '0667227722', 'Alarjan', '766');

-- admin password is aa
INSERT INTO `store`.`storeadmin` (`email`, `id`, `fname`, `lname`, `adminpass`, `birthdate`) VALUES ('ahmedee@gmail.com', '111', 'ahmed', 'rami', '$2y$10$g7lSFbcp/4W3OEztJrGEVOxl1rMDD3NVU6sfg5q0OM9G.AXsc1b1C', '2001-10-10');
