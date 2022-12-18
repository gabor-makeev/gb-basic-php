<?php

$arr = range(0, 10);

$getNumbersParity = function (int $el): string {
    return $el & 1 ? "нечетное" : "четное";
};

$arrByParity = array_map($getNumbersParity, $arr);

print_r($arrByParity);

// Если бы мы хотели выводить результат:
//
// array_map(function ($el) {
//     echo ($el & 1 ? "нечетное" : "четное") . PHP_EOL;
// }, $arr);

// Альтернативное решение
//
// $getNumbersParity = function (int $el): string {
//     return $el % 2 === 0 ? "четное" : "нечетное";
// };
