<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 15.07.2018
 * Time: 1:30
 */


$world = 'HelloWorld';
echo $world = strtoupper($world) . '</br>';

//$data = "23-11-2035";
//$date = date('Y.n.j'[,time(23,11,2035)]);

echo $date . '</br>';

$str = 'html css php';
$str = explode(' ', $str);
echo $str[0] . '</br>';
echo $str[1] . '</br>';
echo $str[2] . '</br>';

$num = '30.11.2016';
echo $num = str_replace(".",'-',$num) . '</br>';

$array = range(0, 100, 1);
$sum = array_sum($array);
echo $sum . '</br>';
//var_dump($array) . '</br>';

$a =[2,'g','j','d','x','h','ds',5,7,4,2,7,8,5,42,3,7,56,4,467,'6ry','sryr','ew',];
echo in_array(3, $a) . '</br>';
echo array_search(3, $a) . '</br>';

echo "<pre>";
$b = [1,2,3,];
$c = ['a','b','c',];
var_dump($d = array_merge($b,$c));

$arrayKey = ['a'=>1,'b'=>2,'c'=>3 ];
$keys = array_keys($arrayKey);
$values = array_values($arrayKey);
var_dump($keys) . '</br>';
var_dump($values) . '</br>';




$dd = ['a','b','c','d','a'];
$aa = array_unique($dd);
var_dump($aa);
echo "</pre>";








