<?php

function getConnection()
{
    $dbConfig = include 'config/db.php';


    try {
        $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['db']};{$dbConfig['charset']}";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], $opt);

//        var_dump($pdo);

        return $pdo;
    } catch (Exception $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }
}