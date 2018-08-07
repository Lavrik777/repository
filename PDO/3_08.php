<?
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

    $stmt = $pdo->query('SELECT * FROM student');

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    var_dump($result);
    echo '</pre>';


} catch (Exception $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}












