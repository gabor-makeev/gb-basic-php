<?php

function getMaxMinAvg(array $arr): array
{
    return [
        "max" => max($arr),
        "min" => min($arr),
        "avg" => array_sum($arr) / count($arr)
    ];
}
