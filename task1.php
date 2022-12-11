<?php

$question = "В каком году была построена эйфелева башня?";

$answerOption1 = 1787;
$answerOption2 = 1887;
$answerOption3 = 1937;

do {
    $answer = (int)readline("$question Варианты: $answerOption1, $answerOption2 или $answerOption3 год" . PHP_EOL);
} while ($answer !== $answerOption1 && $answer !== $answerOption2 && $answer !== $answerOption3);

$result = $answer === $answerOption2 ? "Поздравляю, ответ верный. Конец" : "Ответ неверный. Конец";

echo $result . PHP_EOL;
