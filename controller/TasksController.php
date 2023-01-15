<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/Taskprovider.php';

session_start();

$pdo = require 'db.php';
$pageHeader = 'Задачи';

$username = null;

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
} else {
    header("Location: /");
    die();
}

$taskProvider = new TaskProvider($pdo);


if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task($taskText));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->deleteTask($key); 
}

$tasks = $taskProvider->getUndoneList($pdo);

include "view/tasks.php";