<?php

$userName = readline("Как вас зовут?" . PHP_EOL);

$task1Title = readline("Какая задача стоит перед вами сегодня?" . PHP_EOL);
$task1TimeEstimate = (int)readline("Сколько примерно времени эта задача займет?" . PHP_EOL);

$task2Title = readline("Какая задача стоит перед вами сегодня?" . PHP_EOL);
$task2TimeEstimate = (int)readline("Сколько примерно времени эта задача займет?" . PHP_EOL);

$task3Title = readline("Какая задача стоит перед вами сегодня?" . PHP_EOL);
$task3TimeEstimate = (int)readline("Сколько примерно времени эта задача займет?" . PHP_EOL);

echo "$userName, сегодня у вас запланировано 3 приоритетных задачи на день:"
    . PHP_EOL . "- $task1Title " . "($task1TimeEstimate" . "ч)"
    . PHP_EOL . "- $task2Title " . "($task2TimeEstimate" . "ч)"
    . PHP_EOL . "- $task3Title " . "($task3TimeEstimate" . "ч)"
    . PHP_EOL . "Примерное время выполнения плана = " . ($task1TimeEstimate + $task2TimeEstimate + $task3TimeEstimate) . "ч" . PHP_EOL;

