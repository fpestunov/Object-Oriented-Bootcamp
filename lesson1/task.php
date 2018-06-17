<?php
class Task
{
    public $description;
    public $completed = false;
    public function __construct($description)
    {
        $this->description = $description;
    }
    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Go to the store'); // First instance
$task2 = new Task('Learn OOP'); // Second instance

$task2->complete();

var_dump($task);
var_dump($task2);
