<?php

namespace Root;

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
