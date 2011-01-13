<?php
class User
{
    public $id;
    public $username;
    public $email;
    protected $password;
    
    public function authenticate()
    {
        $property = 'username';
        $method = 'authenticate';
        $this->$method();
        if ($this->password && $this->$property) {
            $db = Database::getInstance();
            $sql = "SELECT *
                    FROM users
                    WHERE username = ?
                    LIMIT 1";
            
            
            $result = $db->queryOne($sql, $this->username);
    
            
            if ($this->username === $result['username'] && $this->password === $result['password']) {
                $_SESSION['username'] = $this->username;
                return true;
            }
        }
        return false;
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