<?php

do {
    $number = (int)readline("Введите положительное число:" . PHP_EOL);
} while ($number <= 0);

$number %= 8;

if ($number > 5) {
    $number = 10 - $number;
}

if ($number === 0) {
    $number = 2;
}

$finger = $number;

echo "Палец на котором остановился счет: палец номер $finger" . PHP_EOL;
