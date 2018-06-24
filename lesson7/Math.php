<?php

class Math
{
    public static function add3(...$nums)
    {
        return array_sum($nums);
    }

    public function add2(...$nums)
    {
        return array_sum($nums);
    }
    
    public function add1()
    {
        return array_sum(func_get_args());
    }
}

var_dump(Math::add3(1, 2, 3));

$math = new Math;

var_dump($math->add1(1, 2, 3, 4));
var_dump($math->add2(1, 2, 3, 4));
