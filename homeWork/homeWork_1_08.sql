
--Задание 1
--Удалить элементы таблицы Products у которых цена < 20

DELETE FROM Products WHERE Price < 20;
------------------------------------------------------------------------------------------------
--Задание 2
--В таблице Customers обновить поле Country на "Ukraine" где Country = "Germany"

UPDATE Customers SET Country='Ukraine' WHERE Country = "Germany"
------------------------------------------------------------------------------------------------
--Задание 3
--Из таблицы Employees выбрать все записи в поле Notes которых содержиться слово "University"

SELECT * FROM Employees
WHERE Notes LIKE ('%University%');
------------------------------------------------------------------------------------------------
--Задание 4
--Выбрать все запись из таблицы Orders где значение поля OrderDate находитя в промежутке
от 1996-07-04 до 1996-08-07 и ShipperID = 1 или 3

SELECT * FROM Orders
WHERE OrderDate BETWEEN '1996-07-04' AND '1996-08-07' AND (ShipperID IN (1,3));
------------------------------------------------------------------------------------------------
--Задание 5
--Узнать солько заказов было сделано для каждого города(city) из таблицы Customers.

SELECT COUNT(Orders.OrderID), Customers.City
FROM Customers
INNER JOIN Orders ON Customers.CustomerID = Orders.CustomerID
GROUP BY Customers.City
ORDER BY COUNT(Orders.OrderID) DESC
------------------------------------------------------------------------------------------------
--Задание 6
--Из таблицы (Product) вывести только те продукты у которых поставщик
--(Supplier): New Orleans Cajun Delights(2) и Tokyo Traders(4)
--и добавить к выводу продутка Имя поставщика (SupplierName)

SELECT * FROM Products
INNER JOIN Suppliers ON Products.SupplierID = Suppliers.SupplierID
WHERE Suppliers.SupplierName IN ('New Orleans Cajun Delights','Tokyo Traders')
------------------------------------------------------------------------------------------------
--Задание 7
--Узнать общую стоимость заказов для пользователя.

SELECT Customers.CustomerName, SUM(OrderDetails.Quantity * Products.Price) AS TotalProductPrice
FROM Customers
INNER JOIN Orders On Customers.CustomerID = Orders.CustomerID
INNER JOIN OrderDetails ON Orders.OrderID = OrderDetails.OrderID
INNER JOIN Products ON OrderDetails.ProductID = Products.ProductID
GROUP BY Customers.CustomerID
------------------------------------------------------------------------------------------------
--Задание 8
--Вывести среднюю сумму всех заказов на каждую дату (OrderDate) в таблице (Orders),
--если средняя сумма заказов в этот день была больше  > 30 и к каждой дате добавить человека,
--кто в этот день принимал заказ из таблицы Employees (edited)

--Вывести самый заказываемых товар в городе
SELECT COUNT(ProductID), OrderDetails.ProductID, Customers.City FROM [OrderDetails]
INNER JOIN Orders ON OrderDetails.OrderID = Orders.OrderID
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID
GROUP BY ProductID, City
ORDER BY COUNT(ProductID) DESC


SELECT OrderID,CustomerName FROM Orders
LEFT JOIN Customers ON Orders.CustomerID = Customers.CustomerID
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID

SELECT OrderID,CustomerName,ShipperName FROM Orders
LEFT JOIN Customers ON Orders.CustomerID = Customers.CustomerID
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID


SELECT AVG(Price) Price, CategoryID FROM Products GROUP BY CategoryID ORDER BY Price DESC