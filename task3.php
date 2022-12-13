<?php

$students = [
    "group1" => [
        "Валерия Семёнова" => rand(1, 5),
        "Всеволод Макаров" => rand(1, 5),
        "Анатолий Воробьев" => rand(1, 5),
        "Константин Максимов" => rand(1, 5),
        "Эмилия Ахматова" => rand(1, 5),
        "Маргарита Егорова" => rand(1, 5)
    ],
    "group2" => [
        "Александра Соколова" => rand(1, 5),
        "Марк Романов" => rand(1, 5),
        "Эрик Николаев" => rand(1, 5),
        "Глеб Никитин" => rand(1, 5),
        "Екатерина Каменская" => rand(1, 5)
    ]
];

foreach ($students as $groupName => $studentsList) {
    $studentsByAverageGrade[$groupName] = 0;

    foreach ($studentsList as $studentName => $studentGrade) {
        $studentsByAverageGrade[$groupName] += $studentGrade;

        if ($studentGrade < 3) {
            $studentsForExpulsion[$groupName][$studentName] = $studentGrade;
        }
    }

    $studentsByAverageGrade[$groupName] = $studentsByAverageGrade[$groupName] / count($studentsList);
}

if ($studentsByAverageGrade["group1"] === $studentsByAverageGrade["group2"]) {
    echo "У групп одинаковые средние значения успеваемости:
group1 = {$studentsByAverageGrade["group1"]}
group2 = {$studentsByAverageGrade["group2"]}" . PHP_EOL;
} elseif ($studentsByAverageGrade["group1"] > $studentsByAverageGrade["group2"]) {
    echo "Группа с самым большим вычисленным значением успеваемости:
group1 = {$studentsByAverageGrade["group1"]}" . PHP_EOL;
} else {
    echo "Группа с самым большим вычисленным значением успеваемости:
group2 = {$studentsByAverageGrade["group2"]}" . PHP_EOL;
}

print_r(["Студенты для отчисления" => $studentsForExpulsion ?? "Нет студентов для отчисления"]);
