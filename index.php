<?
echo "<pre>";
echo "Hello World";

$b = 1.1;
$c = "Leonid";
$d = [1, 2, 3, 'name' => "Leonid"];
$e = true;





echo '<pre>';
var_dump($a, $b, $c, $d);
echo $d[0] . '</br>';
echo $d['name'] . '</br>';

echo '<pre>';

echo '<pre>';
var_dump($a, $b, $c, $d, $e);
echo $d[0] . '</br>';
echo $d['name'] . '</br>';



$name = "Leonid";


echo "<p> Привет $name</p>";
echo "<p> Привет . $name . '!'</p>";

$str = 'This isn\'t string';
echo $str;



$a = 2; // целое число
$aa = 2;
echo $a + $aa . '</br>';
var_dump($a/$aa);

echo "Сложение" . ($a + $aa) . "</br>";



const MY_NAME = "Leonid Petrovich";
define("FOO", "что-тоэ");
$a = 1; // Целое число
$b = 1.1; // Плавающая точка
$c = "Leonid"; // Строка
$d = [1, 2, 3, "name" => "Vadim"]; // Массив
$e = true;

var_dump($a, $b, $c, $d, $e);
echo $d [0] . "</br>";
echo $d ["name"] . "</br>";
echo "</pre>";
//однострочный комментарий # это также однострочный комментарий
/*это многострочный
комментарий
здесь не будут
выполняться команды */


echo "<p> Привет мир! </p>";
$name = "Леонид";
echo "<p> Привет $name! </p>";
echo "<p> Привет {$name}s! </p>";
echo ($a += $b) . "</br>"; // $a = $a +b
echo MY_NAME;



$day = 8;
if (!($day % 2)) {
    echo "Good";
} else {
    echo "Bad";
}


$a = 1;
$b = 2;


switch ($i){
   case 0:
        echo "i равно 0";
        break;
     case 1:
        echo "i равно 1";
        break;
     case 2:
        echo "i равно 2";
        break;
    default:
        echo "i не равно 0, 1 или 2";
}

$day = "Понедельник";
$date = 17;

if ($day == "Понедельник" && $date == 16) {
    echo "Будет англ.";
} else {
    echo " учим PHP";
}
echo '<pre>';



































?>