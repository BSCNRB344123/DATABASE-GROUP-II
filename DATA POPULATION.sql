-- Insert data
INSERT INTO Customer (customerID, name, contact) VALUES (1, 'John Doe', 'johndoe@email.com');
INSERT INTO SalesOrder (orderID, date, customerID) VALUES (101, '2023-10-25', 1);
INSERT INTO Product (productID, name, price) VALUES (1001, 'Widget A', 19.99);
INSERT INTO Inventory (inventoryID, supplierID, productID, quantity) VALUES (501, 1, 1001, 100);

-- Updating data: Retrieve all sales orders for a specific product
SELECT * FROM SalesOrder WHERE customerID = 1;

-- Retrieve supplier information for a specific product
SELECT Supplier.name, Supplier.contact
FROM Product
JOIN Inventory ON Product.productID = Inventory.productID
JOIN Supplier ON Inventory.supplierID = Supplier.supplierID
WHERE Product.productID = 1001;

-- Updating data: Update customer contact information
UPDATE Customer SET contact = 'newemail@email.com' WHERE customerID = 1;

-- Modify price of product
UPDATE Product SET price = 24.99 WHERE productID = 1001;

-- Deleting data
DELETE FROM Reservation WHERE reservationID = 2;

-- Removal of loyalty program from customer
DELETE FROM Reservation WHERE reservationID = 201;
