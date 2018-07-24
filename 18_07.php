<?php

$array = ['Leonid', 'Max'];

array_walk($array, function (&$hello){
    $hello = "Hello " . $hello;
});
print_r($array);
echo "<hr>";

$arrayy = [1,5,7,8,-9,3];

$result = array_filter($arrayy, function ($result){
    if($result > 3 && $result % 2){
        return true;
    }
});

print_r($result);





$array = [1,2,3,-4,5,-6];



array_walk($array, function (&$value, $key){
    $value = $value + 10;
});

print_r($array);


$result = array_filter($array, function ($item){
    if ($item > 0 && !($item %2)) {
        return true;
    }
    return false;
}, ARRAY_FILTER_USE_BOTH);

print_r($result);


$a = getPositivNumbers($array, function ($items){
    $result = [];
    foreach ($items as $item){
        if(!($item % 2)){
            $result[] = $item;
        }
        return $result;
    }

});
var_dump($a);die;

/**
 * @param array $array, callable $callback
 * @return array
 */
function getPositivNumbers(array $array, callable $callback = NULL) {
    $result = [];

    foreach ($array as $value) {
        if ($value > 0) {
            $result[] = $value;
        }
    }
    if($callback){
        $result = call_user_func($callback, $result);
    }


    return $result;
}

?>