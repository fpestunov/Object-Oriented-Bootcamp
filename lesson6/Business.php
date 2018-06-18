<?php

// require 'src/Person.php';
// require 'src/Staff.php';
// require 'src/Business.php';
require 'vendor/autoload.php';

use Root\Person;
use Root\Staff;
use Root\Business;

$jeffrey = new Person('Jeffry Way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);

$john = new Person('John Doe');
$laracasts->hire($john);

var_dump($laracasts);
var_dump($laracasts->getStaffMembers());


