<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function findItem(string $itemName, array $box)
{
    foreach ($box as $item) {
        if (is_array($item)) {
            if (findItem($itemName, $item)) {
                return true;
            }
        } elseif ($item === $itemName) {
            return true;
        }
    }

    return false;
}

echo (findItem('Музыкальный плеер', $box) ? "Предмет найден" : "Предмет не найден") . PHP_EOL;
