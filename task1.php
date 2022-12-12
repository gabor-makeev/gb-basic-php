<?php

$arr1 = [];
$arr2 = [];

$arrSize = rand(10, 20);

for ($i = 0; $i < $arrSize; $i++) {
    $arr1[] = rand(0, 100);
    $arr2[] = rand(0, 100);
}

$result = [];

for ($i = 0; $i < $arrSize; $i++) {
    $result[] = $arr1[$i] * $arr2[$i];
}

print_r($result);

/*
 * Цикл перемножающий элементы двух массивов можно было сократить до следующего:
 * for ($i = 0; $i < $arrSize; $result[] = $arr1[$i] * $arr2[$i++]);
 * Но мне показалось что этот вариант менее читаемый
 */
