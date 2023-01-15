<?php
class Student
{
    private int $id;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string 
    {
        return $this->name;
    }

    public function insert(PDO $pdo) 
    {
        $statement = $pdo->prepare('INSERT INTO 
            `students` (`name`) VALUES (?)');
        return $statement->execute([$this->getName()]);
    }
}

$pdo = new PDO('sqlite:database.db');

// $query = 'CREATE TABLE `students` (
//     id INTEGER NOT NULL PRIMARY KEY,
//     name VARCHAR(100) NOT NULL
// )';
// $statement = $pdo->query($query);

// $studentName = 'Дима Иванов';

// $statement = $pdo->prepare("INSERT INTO `students` 
//     (`name`) VALUES (:name)" );
// $statement->bindParam("name", $studentName);
// $statement->execute();



// $affectedCount = $pdo->exec("INSERT INTO `students` 
//     (`name`) VALUES ('$studentName')");

// var_dump($affectedCount);
// var_dump($pdo);


//извлечение

$id = 2;
$statement = $pdo->prepare('SELECT * FROM `students` 
    WHERE `id` = :id');
$statement->execute([
    'id' => $id
]);
$student = $statement->fetchObject('Student');
print_r($student);

// print_r($statement->fetch());

// $statement = $pdo->prepare('SELECT * FROM `students`');
// $statement->execute();
// print_r($statement->fetchAll(PDO::FETCH_ASSOC));


