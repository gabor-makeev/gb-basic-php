<?php

$question = "В каком году была построена эйфелева башня?";

$answerOption1 = 1787;
$answerOption2 = 1887;
$answerOption3 = 1937;

do {
    $answer = (int)readline("$question Варианты: $answerOption1, $answerOption2 или $answerOption3 год" . PHP_EOL);

    if ($answer === $answerOption1 || $answer === $answerOption3) {
        $result = "Ответ неверный. Конец";
        break;
    }

    if ($answer === $answerOption2) {
        $result = "Поздравляю, ответ верный. Конец";
        break;
    }
} while (true);

echo $result . PHP_EOL;
