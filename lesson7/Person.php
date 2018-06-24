<?php

class Person
{
    public static $age = 1;

    public function haveBirthday()
    {
        static::$age += 1;
        //$this->age += 1; // Will be ERROR        
    }
}

$joe = new Person;
$joe->haveBirthday(); // $age = 2
$joe->haveBirthday(); // $age = 3

$jane = new Person;
$jane->haveBirthday(); // $age = ?... 4!

echo Person::$age.PHP_EOL;
