<?php

require_once "model/User.php";
require_once "model/UserProvider.php";

session_start();

$error = null;

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'A user with such account details was not found';
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

include "view/signin.php";
