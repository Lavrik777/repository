<?php

echo 'Задание №1' . '<hr size="1" color="grey">';

    $name = 'Leonid';
    $age = 25;

    echo 'Меня зовут: ' . $name . "</br>";
    echo "Мне $age лет" . '<hr size="5" color="grey">';

echo 'Задание №2' . '<hr size="1" color="grey">';

    const MYNAME = 'Leonid Petrovitsh' . '</br>';
    echo MYNAME;
    const MYNAME = 'Privet';
    echo MYNAME . '<hr size="5" color="grey">';

echo 'Задание №3' . '<hr size="1" color="grey">';

    $age = -3;
    if ($age >= 18 && $age <= 59) {
        echo "Вам еще работать и работать";
    } elseif ($age > 59) {
        echo "Вам пора на пенсию";
    } elseif ($age < 18 && $age > 0) {
        echo "Вам еще рано работать";
    } elseif ($age < 0) {
        echo "Вас еще нет";
    }
    echo '<hr size="5" color="grey">';

echo 'Задание №4' . '<hr size="1" color="grey">';

    $day = 6;
    switch ($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo 'Это рабочий день';
            break;
        case 6:
        case 7:
            echo 'Это выходной день';
            break;
        default:
            echo "Неизвестный день";
            break;
    }
    echo '<hr size="5" color="grey">';

echo 'Задание №5' . '<hr size="1" color="grey">';
/*
$array = range(0, 10000);
foreach ($array as $value){
    if ((($value % 5) != 0) && ((strpos($value, '3')) || (strpos($value, '33')) || (strpos($value, '333')))){
        $result[] = $value;
    }
}
print_r($result);
*/
echo '<hr size="5" color="grey">';

echo 'Задание №6' . '<hr size="1" color="grey">';

if (isset($_COOKIE['visitTime'])) {
    $visitTime = "Последний раз вы были у на нас {$_COOKIE['visitTime']}";
    setcookie('visitTime',date("d.m.Y, H:i:s"));
} else {
    $visitTime = "Привет! Ты здесь первый раз.";
    setcookie('visitTime', date("d.m.Y, H:i:s"));
}


if(isset($_COOKIE['i'])){
    setcookie('i', ++$_COOKIE['i'], time()+ 60);
}else{
    setcookie('i', 0);
}
echo "Вы посещали наш сайт {$_COOKIE['i']} раз" . '</br>';
echo $visitTime;
echo '<hr size="5" color="grey">';

echo 'Задание №7' . '<hr size="1" color="grey">';

echo 'Задание №8' . '<hr size="1" color="grey">';

$array = ['name' => 'Leonid', 'age' => 25];
file_put_contents('test.txt', serialize($array));
$i = unserialize(file_get_contents('test.txt'));
var_dump($i);
echo '<hr size="5" color="grey">';

echo 'Задание №9' . '<hr size="1" color="grey">';

$array = [1, 2, 4, 6, 9, 12, 45,];
$array2 = [3, 5, 7, 8, 10, 11, 14, 17, 23, 55, 66];
$result = array_merge($array, $array2);
sort($result);
print_r($result);
echo '<hr size="5" color="grey">';

echo 'Задание №10' . '<hr size="1" color="grey">';








?>