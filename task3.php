<?php

do {
    $number = (int)readline("Введите положительное число:" . PHP_EOL);
} while ($number <= 0);

$number %= 8;

switch ($number) {
    case 1:
        $finger = 1;
        break;
    case 2: case 0:
        $finger = 2;
        break;
    case 3: case 7:
        $finger = 3;
        break;
    case 4: case 6:
        $finger = 4;
        break;
    default:
        $finger = 5;
}

echo "Палец на котором остановился счет: палец номер $finger" . PHP_EOL;
