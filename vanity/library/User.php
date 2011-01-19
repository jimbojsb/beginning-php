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
    
    public static function getBy($column, $value)
    {
        $sql = "SELECT *
        		FROM users
        		WHERE $column = ?";
        $db = Database::getInstance();
        $results = $db->queryOne($sql, $value);
        if ($results) {
            return new User($results);
        }
        return null;
    }
    
    public static function create($username, $email, $password)
    {
        $sql = "INSERT INTO users (`username`, `email`, `password`)
        		VALUES (?, ?, ?)";
        $db = Database::getInstance();
        $db->query($sql, array($username, $email, $password));
        if ($db->numRows() === 1) {
            return true;
        }
        return false;
    }
    
    public function authenticate($password)
    {
        $valid = $password === $this->password;
        if ($valid) {
            $_SESSION['username'] = $this->username;
        }
        return $valid;
    }
    
    public function getPosts()
    {
        $db = Database::getInstance();
        $sql = "SELECT *
        		FROM posts
        		WHERE user_id = ?";
        $results = $db->query($sql, $this->id);
        $postObjects = array();
        if ($results) {
            foreach ($results as $result) {
                $post = new Post($result);
                $post->user = $this;
                $postObjects[] = $post;
            }
        }
        return $postObjects;;
    }
    
    public function delete()
    {
        $db = Database::getInstance();
        $sql = "DELETE FROM users
        		WHERE id = ?";
        $db->query($sql, $this->id);
        if ($db->numRows() == 1) {
            User::logout();
            $sql = "DELETE FROM posts 
            		WHERE user_id = ?";
            $db->query($sql, $this->id);
            return true;
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
    
    public static function getLoggedInUser()
    {
        if (self::loggedIn()) {
            return self::getBy('username', $_SESSION['username']);
        }
        return null;
    }
    
    public static function loggedIn()
    {
        return isset($_SESSION['username']);
    }
    
    public static function logout()
    {
        session_destroy();
    }
}