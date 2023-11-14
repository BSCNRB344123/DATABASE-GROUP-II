CREATE DATABASE GroupTwoDatabase;
USE GroupTwoDatabase;

CREATE TABLE Customer (
    customerID INT PRIMARY KEY,
    name NVARCHAR(255),
    contact NVARCHAR(255)
);

CREATE TABLE SalesOrder (
    orderID INT PRIMARY KEY,
    date DATE,
    customerID INT,
    FOREIGN KEY (customerID) REFERENCES Customer(customerID)
);

CREATE TABLE Product (
    productID INT PRIMARY KEY,
    name NVARCHAR(255),
    price DECIMAL(10, 2)
);

CREATE TABLE Supplier (
    supplierID INT PRIMARY KEY,
    name NVARCHAR(255),
    contact NVARCHAR(255)
);

CREATE TABLE Inventory (
    inventoryID INT PRIMARY KEY,
    supplierID INT,
    productID INT,
    quantity INT,
    FOREIGN KEY (supplierID) REFERENCES Supplier(supplierID),
    FOREIGN KEY (productID) REFERENCES Product(productID)
);


CREATE TABLE Reservation (
    reservationID INT PRIMARY KEY,
);


