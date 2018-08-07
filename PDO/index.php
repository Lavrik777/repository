<?php

include 'components/db.php';
$dbConection = getConnection();

if (isset($_POST['send']) && mb_strlen($_POST['name']) < 15 && $_POST['age'] > 18 && $_POST['age'] < 100){


    $prepare = $dbConection->prepare('INSERT INTO student 
    (name, age, university_id) 
    VALUES 
    (:name, :age, :university_id)');

    $result = $prepare->execute([
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'university_id' => $_POST['universityId']
        ]
    );


    //var_dump($_POST); die;

    if($result) {
        $message = 'Пользователь добавлен';
    } else {
        $message = 'Ошибка добавления';
        $success = false;
    }

    header("Location: /PDO/index.php /?success=$success&message=$message");
} else {
    echo 'Вы ввели не коректные данные';
}
if (isset($_GET['success'])) {
    echo "<p> {$_GET['message']}</p>";
}

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form method="post">
            <p>Имя студента: <input type="text" name="name" required ></p>
            <p>Возраст: <input type="number" name="age" required ></p>
            <p>Университет:
                <select name="universityId">
                    <option value="1">beetroot</option>
                    <option value="1">beetroot_new</option>
                    <option value="1">ДГМА</option>
                </select>
            </p>
            <input type="submit" name="send" value="send">
        </form>
    </body>
</html>
