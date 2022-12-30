<?php

require_once "Task.php";

class TaskProvider
{
    private PDO $pdo;
    private array $tasks;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function getUndoneList(): ?array
    {
        return array_filter($this->tasks, function (Task $task): bool {
            return !$task->isDone();
        });
    }

    public function addTask(int $userId, string $description): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (userId, description, isDone) VALUES (:userId, :description, :isDone)'
        );

        return $statement->execute([
            'userId' => $userId,
            'description' => $description,
            'isDone' => 0
        ]);
    }

    public function markTaskAsDone(int $key): void
    {
        $_SESSION['tasks'][$key]->setIsDone(true);
        $this->tasks[$key]->setIsDone(true);
    }
}
