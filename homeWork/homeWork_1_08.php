<?php
/*
Задание 1
Удалить элементы таблицы Products у которых цена < 20

DELETE FROM Products WHERE Price < 20;
------------------------------------------------------------------------------------------------
Задание 2
В таблице Customers обновить поле Country на "Ukraine" где Country = "Germany"

UPDATE Customers SET Country='Ukraine' WHERE Country = "Germany"
------------------------------------------------------------------------------------------------
Задание 3
Из таблицы Employees выбрать все записи в поле Notes которых содержиться слово "University"

SELECT * FROM Employees
WHERE Notes LIKE ('%University%');
------------------------------------------------------------------------------------------------
Задание 4
Выбрать все запись из таблицы Orders где значение поля OrderDate находитя в промежутке
от 1996-07-04 до 1996-08-07 и ShipperID = 1 или 3


------------------------------------------------------------------------------------------------
Задание 5
Узнать солько заказов было сделано для каждого города(city) из таблицы Customers.

SELECT COUNT(CustomerID), City
FROM Customers
GROUP BY City;
------------------------------------------------------------------------------------------------
Задание 6
Из таблицы (Product) вывести только те продукты у которых поставщик
(Supplier): New Orleans Cajun Delights(2) и Tokyo Traders(4)
и добавить к выводу продутка Имя поставщика (SupplierName)

SELECT * FROM Products
LEFT JOIN Suppliers.SupplierName ON Products.SupplierID = Suppliers.SupplierID
WHERE SupplierID = 2 OR SupplierID = 4;
------------------------------------------------------------------------------------------------
Задание 7
Узнать общую стоимость заказов для пользователя.

SELECT Customers.CustomerName, SUM(Products.Price*OrderDetails.Quantity) AS TotalSum
FROM (((Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
INNER JOIN OrderDetails ON Orders.OrderID = OrderDetails.OrderID)
INNER JOIN Products ON OrderDetails.ProductID = Products.ProductID)
GROUP BY CustomerName;
------------------------------------------------------------------------------------------------
Задание 8
Вывести среднюю сумму всех заказов на каждую дату (OrderDate) в таблице (Orders),
если средняя сумма заказов в этот день была больше  > 30 и к каждой дате добавить человека,
кто в этот день принимал заказ из таблицы Employees (edited)

