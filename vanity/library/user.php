<?php
session_start();
function authenticate($username, $password)
{
    $real_username = 'josh';
    $real_password = '1234';
    if ($username === $real_username && $password === $real_password) {
        $_SESSION['username'] = $username;
        return true;
    }
    return false;
}

function getUsername()
{
    return $_SESSION['username'];
}

function loggedIn()
{
    return isset($_SESSION['username']);
}

function createUser($username, $password, $email)
{
    //homework helper function
}

function deleteUser($username)
{
    //homework helper function
}