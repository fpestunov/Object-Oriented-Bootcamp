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

	public function getStaffMembers()
	{
		return $this->staff->members(); // way objects communicate with other
	}	

}

class Staff
{
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function members()
	{
		return $this->members;
	}
}

$jeffrey = new Person('Jeffry Way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);

$john = new Person('John Doe');
$laracasts->hire($john);

var_dump($laracasts);
var_dump($laracasts->getStaffMembers());


