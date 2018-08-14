<?php

require_once "data.php";

$books = [];

//echo "<pre>";
//print_r($result);
//echo "</pre>";

foreach ($result as $item) {
    $books[] = new $item['type']($item);
}

foreach ($books as $book) {
    echo $book->printInfo();
}


//echo "<pre>";
//var_dump($books);
//echo "</pre>";

