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
        header('Location: index.php');
        die();
    }
}

include "view/signin.php";
