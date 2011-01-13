<?php
class Database
{
    protected $_pdo;
    protected $_lastStatement;
    protected static $_instance;
    
    public static function init($pdoConnectionString)
    {
        self::$_instance = new Database($pdoConnectionString);
    }
    
    public static function getInstance($pdoConnectionString = null)
    {
        if (!self::$_instance && $pdoConnectionString) {
            self::init($pdoConnectionString);
            return self::$_instance;
        } else if (self::$_instance) {
            return self::$_instance;
        }
        die('cant get instance if you have not initialized');
    }
    
    private function __construct($pdoConnectionString)
    {
        if ($pdoConnectionString) {
            $this->_pdo = new PDO($pdoConnectionString);
        }
    }
    
    public function query($sql, $params)
    {
        if (!is_array($params)) {
            $params = array($params);
        }
        $statement = $this->_pdo->prepare($sql);
        $successful = $statement->execute($params);
        if (!$successful) {
            return array();
        }
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $this->_lastStatement = $statement;
        return $results;
    }
    
    public function queryOne($sql, $params)
    {
        $results = $this->query($sql, $params);
        if ($results) {
            return array_shift($results);
        }
        return array();
    }
    
    public function queryCell($sql, $params)
    {
        $results = $this->query($sql, $params);
        if ($results) {
            $row = array_shift($results);
            $cell = array_shift(array_values($row));
            return $cell;
        }
        return null;
    }
    
    public function error($output = false)
    {
        if ($output) {
            var_dump($this->_pdo->errorInfo());
            return;
        }
        return $this->_pdo->errorInfo();
    }
    
    public function numRows()
    {
        return $this->_lastStatement->rowCount();
    }
}