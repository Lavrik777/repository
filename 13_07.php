<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 13.07.2018
 * Time: 18:20
 */
//open server x de bag

//$str = 'Письменный Леонид Петрович';
$data = explode(' ', $str);
//var_dump($data);
//
//
////$data=[Письменный, Леонид, ]
$a = implode(' ', $data);
echo $a;


echo strlen($a);
mb_strlen($a
str_replace();
str_ireplace();



$str = 'password';
//echo md5(md5($str));