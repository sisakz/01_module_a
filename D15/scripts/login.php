<?php

/**
 * define the number of ../ to get to the root folder
 */
define('ROOT_LEVEL', '../');

/**
 * require the general functions file
 */
require(ROOT_LEVEL . 'include/functions.php');
error_reporting(E_ALL);
/*
 * look up the user
 */

$pdo = dbConnect();
$username = $_POST['username'];
$password = $_POST["password"];
$sql = 'SELECT `id`, `username`, `password`, `failed` FROM `users` WHERE `username`= ?;';
$sth = $pdo->prepare($sql);
$sth->execute(array($_POST['username']));
$user = $sth->fetch();
if ($user['failed'] > 5) {
    header('Location:' . ROOT_LEVEL . 'login.php?blocked');
    die();
}
if (password_verify($password, $user["password"])) {
    // Password is valid
    // Store only user id in cookie

    $token = random_int(1000000000, 9000000000000);
    setcookie('logged_in', serialize(['id' => $user['id'], "token"=>$token]), 0, '/');


    // save token to ensure cookie is valid
    $sql = 'UPDATE `users` SET `token`= ? WHERE id = ?;';
    $sth = $pdo->prepare($sql);
    $sth->execute(array($token, $user['id']));
    header('Location:' . ROOT_LEVEL . 'index.php');
    exit;
} else {
    /*
     Redurect back to login, increment failed login attempts number
     */

    $sql = 'UPDATE `users` SET `failed`= ? WHERE id = ?;';
    $sth = $pdo->prepare($sql);
    $sth->execute(array($user['failed'] + 1, $user['id']));

    header('Location:' . ROOT_LEVEL . 'login.php?invalid');
    define("INVALID_LOGIN", true);
    exit;
}