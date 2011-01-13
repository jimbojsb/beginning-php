<?php
class Person
{
    protected $name = 'Foo';
    public function __toString()
    {
        echo $this->name;;
    }
}