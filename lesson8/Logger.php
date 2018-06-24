<?php

interface Logger {}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to a file: '.$message);
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to a database: '.$message);
    }
}

// ...
// somewhere there is class where we need to log user information

class UsersController
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;    
    }
    public function show()
    {
        $user = 'John Doe';

        // How to log this information?
        // new LogToFile ?
        // no, no its no good

        // ritght way is
        $this->logger->execute($user);
    }
}

$controller1 = new UsersController(new LogToFile);
$controller1->show();

$controller2 = new UsersController(new LogToDatabase);
$controller2->show();
