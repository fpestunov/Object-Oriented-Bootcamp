<?php

class Person
{
	protected $name;

	public function __construct($name) // Default variable
	{
		$this->name = $name;
	}

}

class Business
{
	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}
	// What are doing business? Hire()
	// Who hire business? $person
	public function hire(Person $person)
	{
		// Add $person to the Staff collection
		// if you write method the you should add it in Staff
		$this->staff->add($person); // way objects communicate with other
	}	

}

class Staff
{
	protected $members = [];

	public function add(Person $person)
	{
		$this->members[] = $person;
	}
}

$jeffrey = new Person('Jeffry Way');
$john = new Person('John Doe');

$staff = new Staff;

$laracasts = new Business($staff);

$laracasts->hire($jeffrey);
$laracasts->hire($john);

var_dump($laracasts);


