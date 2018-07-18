<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 15.07.2018
 * Time: 10:06
 */


/*
$array = range(0,30);

function myFun($array, $param = true){
    foreach($array as $value)
        if ($param && !($value % 2)){

        }
}
echo myFun(); */

//Cуперглобальные переменные



//$name = ['name' =>]
//setcookie("name",  "Leonid");
//
//var_dump($_COOKIE);
if(isset($_POST['send'])) {
    echo '<pre>';
    print_r($_FILES);
    print_r($_POST);
    echo '</pre>';
    if(isset($_FILES['my_file'])) {
//        var_dump($_FILES['my_file']['tmp_name']);
//        var_dump("uploads/" . $_FILES['my_file']['name']);
        move_uploaded_file($_FILES['my_file']['tmp_name'], "uploads/" . $_FILES['my_file']['name']);
    }
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

        <form action="/15_07.php" method="post" enctype="multipart/form-data">
            <p>Name<input type="text" name="name" placeholder="Введите свое имя" ></p>
            <p>Email<input type="emai" name="email" placeholder="Введите свой email"></p>
            <p><input type="file" name="my_file"></p>
            <input type="submit" name="send" value="send">


        </form>

    </body>
</html>



<?php
//Вопрос по домашке ДАТА
?>

















