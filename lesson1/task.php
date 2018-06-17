<?php
class Task
{
    public $description;
    public function __construct($description)
    {
        $this->description = $description;
    }
}

$task = new Task('Go to the store'); // First instance
$task2 = new Task('Learn OOP'); // Second instance

var_dump($task->description);
var_dump($task2->description);
