<?php

class TaskProvider
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function getUndoneList(): ?array
    {
        return array_filter($this->tasks, function (Task $task): bool {
            return !$task->isDone();
        });
    }

    public function addTask(string $description): void
    {
        $task = new Task($description);

        $_SESSION['tasks'][] = $task;
        $this->tasks[] = $task;
    }
}
