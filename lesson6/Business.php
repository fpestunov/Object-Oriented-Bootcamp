<?php

require 'src/Person.php';
require 'src/Staff.php';
require 'src/Business.php';

$jeffrey = new Person('Jeffry Way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);

$john = new Person('John Doe');
$laracasts->hire($john);

var_dump($laracasts);
var_dump($laracasts->getStaffMembers());


