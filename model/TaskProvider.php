<?php

class TaskProvider {
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    private array $tasks;
    public function addTask(Task $task)
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (description, isDone) VALUES (:description, :isDone)'
        );

        return $statement->execute([
            'description' => $task->getDescription(),
            'isDone' => ($task->getIsDone() ? 1 : 0),
        ]);
    }

    public function deleteTask(int $key) { //тут надо переделывать
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }

    public function getUndoneList($pdo) {
        $statement = $pdo->prepare('SELECT * FROM `tasks` WHERE `isDone` LIKE ?');
        $statement->execute(['%0%']);
        $tasks = $statement->fetchAll();
        return $tasks;
    }
}