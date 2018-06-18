<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    // Setter method validate data.
    public function setAge($age)
    {
        if ($age < 18)
        {
            throw new Exception("Person is not old enough");
        }
        $this->age = $age;
    }
}

$john = new Person('John Doe');

// There we'll get exception
// $john->age(17);

$john->setAge(30);
var_dump($john->getAge());

$john->age = 8;
var_dump($john);
