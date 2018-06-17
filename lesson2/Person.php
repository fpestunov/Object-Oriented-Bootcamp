<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$john = new Person('John Doe');

$john->age = 30;
var_dump($john);

// Update age
$john->age++;
var_dump($john);
