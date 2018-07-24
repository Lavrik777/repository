<?php
if (isset($_POST['send'])) {
    $requestData = [
        'name' => $_POST['name'],
        'message' => $_POST['message']
    ];

    $filePath = 'counter.txt';

    if (file_exists($filePath)) {
        $data = unserialize(file_get_contents($filePath));
    }

    if (!$data) {
        $data = [];
    }

    array_push($data, $requestData);

    file_put_contents($filePath, serialize($data));

    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . '/20_07.php');
}