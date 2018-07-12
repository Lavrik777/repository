<?php

//$array = [1,2,'name' => 'Leonid',4,5,6];
//
//for ($i = 0; $i < count($array); $i++) {
//    echo $array[$i] . '</br>';
//}
//
//foreach ($array as $key => $value) {
//        echo '!' . '</br>';
//        if ($key === 0) {
//            echo "key: $key; Value:$value </br>";
//            break;
//        }
//}

//$i = 10;
//
//while ($i <= 10) {
//    echo $i . '</br>';
//    $i++;
//}
//
//do {
//    echo $i;
//    $i++;
//    echo '</br>';
//} while($i < 10);

$num = 5;
$degree = 2;

echo myPow(5, 4);


/**
 * Функция для возведения числа в степень
 *
 * @param $num Число для возведения в степень
 * @param int $degree Степень в которую возводим
 * @return int Результат
 */
function myPow($num, $degree = 3)
{
    if ($num < 6){
        echo "Privet";
    }
    $result = $num ** $degree;

    return $result;
}


echo $result;





















?>











