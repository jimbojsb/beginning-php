<?php
class Person
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function __toString()
    {
        return "Person: " . $this->name;
    }
}