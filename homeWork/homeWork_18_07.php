<?php

//Задача 1
/*
$user = 'С возвращением, дружище';
$userNew = 'Привет, новичек';


if (isset($_COOKIE['visitOne'])) {
    echo $user . '!!!';
}else {
    setcookie('visitOne', 'cookie', time() + 36000);
    echo $userNew;
}
*/

//Задача 2

//$time = date("d.m.Y, H:i:s", time() + 60);
//echo $time;
/*
if (isset($_COOKIE['visitTime'])){
    $visitTime = "Вы были последний раз {$_COOKIE['visitTime']}";
    setcookie('visitTime',date("d.m.Y, H:i:s"));
}else {
    $visitTime = "Привет! Ты здесь первый раз.";
    setcookie('visitTime', date("d.m.Y, H:i:s"));
}
echo $visitTime;
*/

//Задача 3

if(isset($_COOKIE['i'])){
    setcookie('i', ++$_COOKIE['i']);
}else{
    setcookie('i', 1);
}
echo "Вы посещали наш сайт {$_COOKIE['i']} раз";





?>