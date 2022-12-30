<?php

require_once "Task.php";

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUndoneList(int $userId): ?array
    {
        $undoneTasks = [];

        $statement = $this->pdo->prepare(
            'SELECT id, description, isDone FROM tasks WHERE userId = :userId'
        );

        $statement->execute([
            'userId' => $userId
        ]);

        while ($statement && $undoneTask = $statement->fetchObject(Task::class)) {
            $undoneTasks[] = $undoneTask;
        };

        return $undoneTasks;
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
