<?php

include '../logics.php';
//if(isset($_POST['send'])){
//    session_start();
//    $_SESSION['answerThree'] = $_POST['answer'];
//}
echo '<pre>';
var_dump($_SESSION);
var_dump($_POST);
echo '</pre>';

$correctAnswer= [
    'test_4'=>[4, 9, 12]
];

$userAnswer = $_SESSION["test_{$_POST['testId']}"];

if(!array_diff($userAnswer, $correctAnswer["test_($testId)"])) {
    echo 'Тест пройден';
} else {
    echo 'Тест не пройден';
}






?>