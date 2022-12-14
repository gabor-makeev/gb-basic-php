<?php

$wishes = [
    "здоровья",
    "воображения",
    "счастья",
    "вдохновения",
    "везения"
];

$epithets = [
    "безмерного",
    "космического",
    "восхитительного",
    "бесконечного",
    "безудержного",
    "прекрасного",
    "замечательного"
];

$wishesLimit = 3;

do {
    $userName = readline("Пожалуйста, введите имя именинника:" . PHP_EOL);
} while (!$userName);

$congratulationTemplate = "Дорогой(ая) $userName, от всего сердца поздравляю тебя с днем рождения, желаю";

for ($i = 1; $i <= $wishesLimit; $i++) {
    $randomWishKey = array_rand($wishes);
    $randomEpithetKey = array_rand($epithets);

    $congratulationWish = "{$epithets[$randomEpithetKey]} {$wishes[$randomWishKey]}";

    switch ($i) {
        case $wishesLimit:
            $separator = " и ";
            break;
        case 1:
            $separator = " ";
            break;
        default:
            $separator = ", ";
    }

    $congratulationTemplate = implode($separator, [$congratulationTemplate, $congratulationWish]);

    unset($wishes[$randomWishKey], $epithets[$randomEpithetKey]);
}

echo "$congratulationTemplate!" . PHP_EOL;
