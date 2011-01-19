<?php
class User
{    
    public function __construct($data)
    {
        if (is_array($data)) {
            foreach  ($data as $property => $value) {
                $this->$property = $value;
            }
        }   
    }
    
    public static function findByUsername($username)
    {
        $sql = "SELECT *
        		FROM users
        		WHERE username = ?";
        $db = Database::getInstance();
        $results = $db->queryOne($sql, $username);
        if ($results) {
            return new User($results);
        }
        return null;
    }
    
    public function authenticate($password)
    {
        return $password === $this->password;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public static function getUsername()
    {
        return $_SESSION['username'];
    }
    
    public static function loggedIn()
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
    
    public static function logout()
    {
        session_destroy();
    }
}