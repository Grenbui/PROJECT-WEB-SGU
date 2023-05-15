CREATE DATABASE POURHOMME_MANAGEMENT

USE POURHOMME_MANAGEMENT
GO

/*Xóa bảng */
DROP DATABASE POURHOMME_MANAGEMENT

/*Tạo bảng */
CREATE TABLE PRODUCT_LINE(
	productLineID VARCHAR(50) constraint PK_PRODUCTLINE_productLine NOT NULL PRIMARY KEY (productLineID),
	productLineName VARCHAR(50)
)

CREATE TABLE PRODUCT(
	productID VARCHAR(50) constraint PK_PRODUCT_productID NOT NULL PRIMARY KEY(productID),
	productName VARCHAR(50) NOT NULL,
	productLineID VARCHAR(50) NOT NULL constraint FK_PRODUCT_productLineID FOREIGN KEY (productLineID) REFERENCES PRODUCT_LINE(productLineID),
	productVendor VARCHAR(50) NOT NULL,
	productDescription TEXT NOT NULL,
	quantityInStock INT NOT NULL,
	buyPrice DECIMAL(7, 0) NOT NULL,
	MSRP DECIMAL(7, 0),
	productMaterial VARCHAR(50) NOT NULL
)

CREATE TABLE PRODUCT_SIZE(
	productSizeID VARCHAR(50) NOT NULL constraint PK_PRODUCT_SIZE_productSizeID PRIMARY KEY(productSizeID),
	productID VARCHAR(50) constraint FK_PRODUCT_SIZE_productID FOREIGN KEY (productID) REFERENCES PRODUCT (productID),
	productSize INT
)

CREATE TABLE PRODUCT_IMAGE(
	productImageID VARCHAR(50) NOT NULL constraint PK_PRODUCT_IMAGE_productImageID PRIMARY KEY (productImageID),
	productID VARCHAR(50) constraint FK_PRODUCT_IMAGE_productID FOREIGN KEY (productID) REFERENCES PRODUCT (productID),
	productImageURL VARCHAR(255),
	isMainImage BIT
)

CREATE TABLE PRODUCT_COLOR (
	productColorID VARCHAR(50) NOT NULL constraint PK_PRODUCT_COLOR_productColorID PRIMARY KEY (productColorID),
	productID VARCHAR(50) constraint FK_PRODUCT_COLOR_productID FOREIGN KEY (productID) REFERENCES PRODUCT (productID),
	productColor VARCHAR(50)
)


CREATE TABLE CUSTOMER(
	customerID VARCHAR(50) NOT NULL constraint PK_CUSTOMER_customerID PRIMARY KEY (customerID),
	customerName VARCHAR(100),
	customerEmail VARCHAR(100),
	userNameAccount VARCHAR(100),
	userPasswordAccount VARCHAR(100),
	phoneNumber VARCHAR(11),
	addressLine1 VARCHAR(100),
	addressLine2 VARCHAR(100),
	city VARCHAR(50),
	country VARCHAR(50),
	customerStatus BIT DEFAULT 0
)

CREATE TABLE ORDERS(
	orderID VARCHAR(50) NOT NULL constraint PK_ORDERS_orderID PRIMARY KEY (orderID),
	orderDate DATE,
	shippedDate DATE,
	status VARCHAR(50),
	comments VARCHAR(300),
	customerID VARCHAR(50) constraint FK_ORDERS_customerID FOREIGN KEY (customerID) REFERENCES CUSTOMER(customerID),
	subAddress VARCHAR(100)
)

CREATE TABLE ORDER_DETAIL(
	orderDetailID VARCHAR(50) NOT NULL constraint PK_ORDER_DETAIL_orderDetailID PRIMARY KEY (orderDetailID),
	orderID VARCHAR(50) constraint FK_ORDER_DETAIL_orderID FOREIGN KEY (orderID) REFERENCES ORDERS(orderID),
	productID VARCHAR(50) NOT NULL constraint FK_ORDERDETAIL_productID FOREIGN KEY (productID) REFERENCES PRODUCT(productID),
	quantityOrdered INT NOT NULL, 
	priceEach DECIMAL(7, 0) NOT NULL,
	orderLineNumber INT
)


CREATE TABLE PAYMENT(
	customerID VARCHAR(50) NOT NULL , checkNumber INT NOT NULL, 
	constraint PK_PAYMENT_customerID_checkNumber PRIMARY KEY (customerID, checkNumber),
	constraint FK_PAYMENT_customerID FOREIGN KEY (customerID) REFERENCES CUSTOMER (customerID),
	paymentDate DATE,
	amount DECIMAL(9, 0)
)



