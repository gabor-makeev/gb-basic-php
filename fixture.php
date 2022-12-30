<?php

$pdo = require 'db.php';
require_once "model/UserProvider.php";

$createUsersTableQuery = 'CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)';

$createTasksTableQuery = 'CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    userId INTEGER NOT NULL,
    description VARCHAR(255) NOT NULL,
    isDone TINYINT NOT NULL
)';

$pdo->exec($createUsersTableQuery);
$pdo->exec($createTasksTableQuery);

$user = new User('geekbrains');
$user->setName('GeekBrains PHP');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, 'password123');


