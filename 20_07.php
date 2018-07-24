<?php

//if (isset($_POST['send'])){
//    $data = [
//        'name' => $_POST['name'],
//        'message' => $_POST['massege']
//    ];
//
//    $fp = fopen('counter.txt', 'a');
//    $test = fwrite($fp, serialize($data));
//
//    fclose($fp);
//    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/20_07.php");
//}
//
//$myFile = fopen('counter.txt', 'r');
//$messages = fread($myFile, filesize("counter.txt"));
//fclose($myFile);
//
//$arrayMessage = unserialize($messages);
//
//echo "Name: $arrayMessage['name'] Message: $arrayMessage['message']";

//var_dump($arrayMessages);



include 'function.php';

$filePath = 'counter.txt';
$data = unserialize(file_get_contents($filePath));

if ($data) {
   foreach ($data as $message) {
       echo '<p>My name is ' . $message['name'] . ' I\'m ' . $message['message'] . '</p>';
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
<form action="function.php" method="post">
   <p>Name: <input type="text" name="name"/></p>
   <p>Message: <input type="text" name="message"/></p>
   <input type="submit" name="send" value="send">
</form>

</body>
</html>
