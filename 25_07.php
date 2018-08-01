<?php

$user =[
  'nameId' => '1',
  'name' => 'leonid',
  'password' => '123456',
  'age'=> '25',
  'email' => 'lavrik',
];

SELECT OrderID,CustomerName FROM Orders
LEFT JOIN Customers ON Orders.CustomerID = Customers.CustomerID
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID

SELECT OrderID,CustomerName,ShipperName FROM Orders
LEFT JOIN Customers ON Orders.CustomerID = Customers.CustomerID
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID


SELECT AVG(Price) Price, CategoryID FROM [Products] GROUP BY CategoryID ORDER BY Price DESC


