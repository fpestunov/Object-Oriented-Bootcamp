<?php

// require 'src/Person.php';
// require 'src/Staff.php';
// require 'src/Business.php';
require 'vendor/autoload.php';

$jeffrey = new Root\Person('Jeffry Way');
$staff = new Root\Staff([$jeffrey]);
$laracasts = new Root\Business($staff);

$john = new Root\Person('John Doe');
$laracasts->hire($john);

var_dump($laracasts);
var_dump($laracasts->getStaffMembers());


