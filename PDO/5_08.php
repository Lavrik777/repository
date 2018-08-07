<?php

//include 'components/db.php';
getConnection();
var_dump($pdo);










//$host = '127.0.0.1';
//$db   = 'beetroot_student';
//$user = 'root';
//$pass = '';
//$charset = 'utf8';
//
//
//try {
//    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//    $opt = [
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//    ];
//
//    $pdo = new PDO($dsn, $user, $pass, $opt);
//
//    $result = $pdo->prepare("SELECT name, age, university_id FROM student WHERE university_id = ? AND age > ?");
//    $result->execute([1, 24]);
//    print_r($result->fetchAll(PDO::FETCH_ASSOC));
//
//    $result = $pdo->prepare("SELECT name, age, university_id FROM student WHERE university_id = :university_id AND age > :age");
//    $result->execute(['age'=> 24, 'university_id' => 2]);
//    print_r($result->fetchAll(PDO::FETCH_ASSOC));
//
//    $result = $pdo->prepare("INSERT INTO student (name, age, university_id) VALUES (:name, :age, :university_id)");
//    $name = "Vadim";
//    $age = 18;
//    $university_id = 4;
//    $result->bindParam(':name',$name);
//    $result->bindParam(':age',$age);
//    $result->bindParam(':university_id',$university_id);
//    $result->execute();
//
//
//
//
//} catch (Exception $e) {
//    die('Подключение не удалось: ' . $e->getMessage());
//}
//


