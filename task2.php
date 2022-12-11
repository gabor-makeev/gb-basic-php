<?php

$userName = readline("Как вас зовут?" . PHP_EOL);

do {
    $tasksNumber = (int)readline("Сколько перед вами стоит задач?" . PHP_EOL);
} while ($tasksNumber <= 0);

$taskList = "$userName, сегодня у вас запланировано $tasksNumber приоритетных задачи на день:" . PHP_EOL;
$totalTaskTimeEstimate = 0;

for ($taskCount = 1; $taskCount <= $tasksNumber; $taskCount++) {
    $taskTitle = readline("Какая задача стоит перед вами сегодня?" . PHP_EOL);
    $taskTimeEstimate = (int)readline("Сколько примерно времени эта задача займет?" . PHP_EOL);

    $taskList .= "- $taskTitle ({$taskTimeEstimate}ч)" . PHP_EOL;
    $totalTaskTimeEstimate += $taskTimeEstimate;
}

$taskList .= "Примерное время выполнения плана = {$totalTaskTimeEstimate}ч" . PHP_EOL;

echo $taskList;
