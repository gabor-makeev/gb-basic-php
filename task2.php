<?php

$arr = range(0, 10);
shuffle($arr);

print_r($arr);

function getMaxMinAvg(array $arr): array
{
    return [
        "max" => max($arr),
        "min" => min($arr),
        "avg" => array_sum($arr) / count($arr)
    ];
}

print_r(getMaxMinAvg($arr));
