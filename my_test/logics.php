<?php
//var_dump($_POST);die;

if (isset($_POST['answer']) && $_POST['testId'] && $_POST['questionNumber']) {
    session_start();
    $testId = $_POST['testId'];
    $questionNumber = $_POST['questionNumber'];

    $_SESSION["test_{$testId}"]["answer{$questionNumber}"] = $_POST['answer'];
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
}

?>