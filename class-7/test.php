<?php
require_once 'Person.php';
require_once 'Student.php';

$p = new Person('Josh');
echo $p;

$s = new Student('Josh', 12);
echo $s;


echo $s->gradeLevel;