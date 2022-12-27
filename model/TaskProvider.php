<?php

class TaskProvider
{
    public function getUndoneList(): ?array
    {
        if (!isset($_SESSION['tasks'])) {
            return null;
        }

        return array_filter($_SESSION['tasks'], function (Task $task): bool {
            return !$task->isDone();
        });
    }

    public function addTask(string $description): void
    {
        $task = new Task($description);
        $_SESSION['tasks'][] = $task;
    }
}
