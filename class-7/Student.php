<?php
class Student extends Person
{
    protected $gradeLevel;
    
    public function __construct($name, $gradeLevel)
    {
        parent::__construct($name);
        $this->gradeLevel = $gradeLevel;
    }
    
    public function __toString()
    {
        return 'Student: ' . parent::__toString();
    }
    
    public function getGradeLevel()
    {
        return $this->gradeLevel;
    }
    
    public function setGradeLevel($gradeLevel)
    {
        $this->gradeLevel = $gradeLevel;
    }
}