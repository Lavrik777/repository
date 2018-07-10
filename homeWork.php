<?php

// Задача 1

//User: Leonid
/*
 Date: 10.07.2018
 Time: 0:20
 */

echo 'Hello World'. '</br>';

// Задача 2

$nameTV = "1+1";
$addressManufacturer = 'Парковая 9';
$colorAuto = 'Зеленый';
$temperatureWater = 27;
$phoneModel = 'Xiaomi';

//Задача 3

$cat = 3;
$dog = 5;
$grasshopper = 8;

echo "$cat, $dog, $grasshopper." . '</br>';

$beasts = $cat + $dog + $grasshopper;

echo $beasts . '</br>';

$result = 2+6+2/5-1;

echo "$result" . '</br>';

//Задача 4

$a = 1;
$b = 2;

echo "$a, $b." . '</br>';

$c = $a;
$d =& $b;

echo "$c, $d." . '</br>';

$a = 3;
$b = 4;

echo "$a, $b, $c, $d." . '</br>';

//Задача 5

const GOOD = 41;
const BAD = 33;

echo GOOD + BAD . '</br>';

const GOOD = 35;

//Задача 6

$a = 152; //integer
$b = '152'; //string
$c = 'London'; //string
$d = array(152); //array
$e = 15.2; //float
$f = false; //boolean
$g = true; //boolean

echo '<pre>';
var_dump($a, $b, $c, $d, $e, $f, $g);
echo '</pre>';

//Задача 7

$a = 10;
$b = 5;

echo "$b из {$a}ти студентов посетили лекцию." . '</br>';
echo '<html>' . $b . ' из ' . $a.'ти студентов посетили лекцию.' . '</html'; //способ из гугла если что-то не так, поправьте пожалуста )))


//Задача 8

$morning = 'Доброе утро';
$ladies = ' дамы';
$gantlemen = ' и господа';

echo "$morning,$ladies$gantlemen";

//Задача 10

const MIN = 10;
const MAX = 50;
$x = 10;

if ($x > MIN && $x < MAX) {
    echo "+";
} else if ($x == MIN || $x == MAX) {
    echo "+-";
}  else {
    echo "-";
}







?>