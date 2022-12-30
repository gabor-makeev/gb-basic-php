<?php

require_once "model/User.php";
require_once "model/Task.php";
require_once "model/TaskProvider.php";
$pdo = require 'db.php';

session_start();

$username = null;

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
} else {
    header('Location: /');
    die();
}

$taskProvider = new TaskProvider($pdo);

if (isset($_POST['description']) && !empty($_POST['description'])) {
    $userId = $user->getId();
    $description = $_POST['description'];

    $taskProvider->addTask($userId, $description);

    header('Location: /?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'complete') {
    $key = $_GET['key'];

    $taskProvider->markTaskAsDone($key);

    header('Location: /?controller=tasks');
    die();
}

$tasks = $taskProvider->getUndoneList();

require_once "view/tasks.php";
