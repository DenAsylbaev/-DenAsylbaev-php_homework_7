<?php

include 'model/User.php';
include 'model/UserProvider.php';

$pdo = include "db.php";

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  -- username VARCHAR(100) NOT NULL, 
  -- над юзером надо еще посидеть
  
  description VARCHAR(100) NOT NULL,
  isDone TINYINT
)');

$user = new User('geek');
$user->setName('GB PHP');

$userprovider = new UserProvider($pdo);
$userprovider->registerUser($user, 'password123');