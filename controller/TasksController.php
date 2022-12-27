<?php

require_once "model/User.php";

session_start();

$username = null;

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
} else {
    header('Location: /');
    die();
}

$tasks = [
    'task 1',
    'task 2'
];

require_once "view/tasks.php";
