<?php

/**
 * define the number of ../ to get to the root folder
 */
define('ROOT_LEVEL', '../');

/**
 * require the general functions file
 */
require(ROOT_LEVEL . 'include/functions.php');


/*
 * remove the user cookie info and redirect to the login page.
    and clear token
 */
$pdo = dbConnect();
$user = userInfo();
$sql = 'UPDATE `users` SET `token`= NULL WHERE id = ?;';
$sth = $pdo->prepare($sql);
$sth->execute(array($user["id"]));
setcookie('logged_in', '', time() - 3600, '/');
header('Location:' . ROOT_LEVEL . 'login.php');