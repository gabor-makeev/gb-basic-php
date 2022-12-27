<?php

require_once "model/User.php";
require_once "model/Task.php";
require_once "model/TaskProvider.php";

session_start();

$username = null;

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
} else {
    header('Location: /');
    die();
}

$taskProvider = new TaskProvider();

if (isset($_POST['description']) && !empty($_POST['description'])) {
    $taskProvider->addTask($_POST['description']);

    header('Location: /?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'complete') {
    $key = $_GET['key'];

    $_SESSION['tasks'][$key]->setIsDone(true);

    header('Location: /?controller=tasks');
    die();
}

$tasks = $taskProvider->getUndoneList();

require_once "view/tasks.php";
