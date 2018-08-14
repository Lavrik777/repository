<?php

require_once "classes.php";

$host = '127.0.0.1';
$db = 'beetroot';
$user = 'root';
$pass = '';
$charset = 'utf8';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);

} catch (Exception $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

$stmt = $pdo->query('SELECT * FROM books');
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


