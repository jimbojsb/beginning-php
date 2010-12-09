<?php
require_once 'dbconnection.php';
session_start();
function authenticate($username, $password)
{
    global $db;
    $sql = "SELECT *
            FROM users
            WHERE username='$username'
            LIMIT 1";
    

    
    
    $results = $db->query($sql);
    
    $result = $results->fetch(PDO::FETCH_ASSOC);
   
    
    if ($username === $result['username'] && $password === $result['password']) {
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