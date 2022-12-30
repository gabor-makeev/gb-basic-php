<?php

require_once "model/UserProvider.php";
$pdo = require 'db.php';

session_start();

$error = null;

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;

    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с такими данными не был найден';
    } else {
        $_SESSION['username'] = $user;
        header('Location: /');
        die();
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    session_destroy();
    header('Location: /');
    die();
}

if (isset($_SESSION['username'])) {
    header('Location: /');
    die();
}

include "view/signin.php";
