<?php

class Mother
{
	
	function getEyeCount()
	{
		return 2;
	}
}

class Child extends Mother
{
    
}

var_dump((new Child)->getEyeCount()); // 2
