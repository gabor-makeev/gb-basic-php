<?php

$arr = range(0, 10);

array_map(function ($el) {
    echo ($el & 1 ? "нечетное" : "четное") . PHP_EOL;
}, $arr);

// Альтернативное решение
//
// array_map(function ($el) {
//     echo ($el % 2 === 0 ? "четное" : "нечетное") . PHP_EOL;
// }, $arr);
