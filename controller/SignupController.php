<?php

require_once "model/UserProvider.php";
$pdo = require 'db.php';

session_start();

$error = null;

if (isset($_SESSION['username'])) {
    header('Location: /');
    die();
}

if (isset($_POST['name'], $_POST['username'], $_POST['password'])) {
    [
        'name' => $name,
        'username' => $username,
        'password' => $password
    ] = $_POST;

    $userProvider = new UserProvider($pdo);
    $user = new User($username);
    $user->setName($name);

    if ($userProvider->registerUser($user, $password)) {
        $user = $userProvider->getByUsernameAndPassword($username, $password);
        $_SESSION['username'] = $user;

        header('Location: /');
        die();
    } else {
        $error = 'Не удалось зарегистрировать пользователя';
    }
}

include "view/signup.php";
