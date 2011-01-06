<?php
class Person 
{
    public $name;
    public $age;
    public $height;
    public $numFingers = 10;
    public $sex;
    public static $sexes = array('male', 'female');
    
    public function __construct($name = null, $sex = null)
    {
        if (self::isValidName($name)) {
            $this->name = $name;            
        }

        if ($sex) {
          $this->setSex($sex);
        }
    }
    
    public function __toString()
    {
        $output = $this->name . " " . $this->sex;
        return $output;
    }
    
    public function isLegal()
    {
        if ($this->age >= 18) {
            return true;
        }
        return false;
    }
    
    public function setSex($sex)
    {
        if (in_array($sex, self::$sexes)) {
            $this->sex = $sex;    
        }
    }
    
    public static function isValidName($name)
    {
        return ctype_alpha($name);
    }
    
    
    
    
    
    
    
    
}