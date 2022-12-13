<?php

/**
 * This function checks to see if a user is logged in and will
 * redirect to the login page if required.
 */
function checkLogin(){
    $pdo = dbConnect();
    $user = userInfo();
    $cookie = unserialize($_COOKIE['logged_in']);
    // Check if token is valid
    if (!$_COOKIE['logged_in'] || $cookie['token'] != $user["token"]){
        header('Location:' . ROOT_LEVEL . 'login.php');
        exit;
    }
}

/**
 * This method attempts to connect to the database and returns a PDO
 * connection object.
 *
 * @return PDO
 */
function dbConnect(){
    try{
        $pdo = new PDO(
            'mysql:host=localhost;dbname=task8;charset=utf8',
            'webtech', 'Pa$$worD');
        return $pdo;
    } catch (Exception $e){
        die($e->getMessage());
    }
}

/**
 * This function returns an array of information about the user who
 * is logged in.
 *
 * @return mixed
 */
function userInfo(){
    $pdo = dbConnect();


    // Get user data from database by user id
    $cookie = unserialize($_COOKIE['logged_in']);
    $sql = 'SELECT `id`, `username`, `token` FROM `users` WHERE `id`= ?;';
    $sth = $pdo->prepare($sql);
    $sth->execute(array($cookie["id"]));
    $user = $sth->fetch();
    return $user;
}