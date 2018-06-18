<?php

abstract class Shape
{
	protected $color;
	public function __construct($color = 'red')
	{
	    $this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}

	abstract function getArea();
}

class Square extends Shape
{
	protected $length = 4;

	public function getArea()
	{
		return pow($this->length, 2);
	}	
}

class Triangle extends Shape
{
	public function getArea()
	{
		return 0.5 ;
	}
}
class Circle extends Shape
{
	protected $radius = 4;
	public function getArea()
	{
		return M_PI * pow($this->radius, 2); // 3.14 or pi()
	}
}


var_dump((new Square('green'))->getColor());
var_dump((new Triangle)->getColor());
var_dump((new Circle)->getArea());
