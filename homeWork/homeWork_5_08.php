<?php


$host = '127.0.0.1';
$db   = 'beetroot_student';
$user = 'root';
$pass = '';
$charset = 'utf8';


try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);

//    $stmt = $pdo->query('SELECT * FROM student');
//    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    print_r($result);
//    echo '</br>';

    $student = 0;
    $sql = "SELECT * FROM student";
    $res = $pdo->prepare($sql);
    $res->execute();
    print_r($res->fetchAll(PDO::FETCH_ASSOC));
    echo '</br>';

//    $update = 'UPDATE student SET age = 22 WHERE id = 1';

    echo $pdo->exec('UPDATE student SET age = 42 WHERE id = 1') . '</br>';
    echo $pdo->exec('UPDATE student SET age = 44 WHERE id = 3') . '</br>';
    echo $pdo->exec('DELETE FROM student WHERE id = 5') . '</br>';



//    echo '<pre>';
//    var_dump($result);
//    echo '</pre>';


} catch (Exception $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}
