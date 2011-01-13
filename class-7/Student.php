<?php
class Foo
{
    protected $name = 'Foo';
    public function __toString()
    {
        echo $this->name;;
    }
}