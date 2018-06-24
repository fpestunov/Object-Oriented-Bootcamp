<?php

interface Logger {}

class LogToFile
{
    public function execute($message)
    {
        var_dump('log the message to a file');
    }
}

class LogToDatabase
{
    public function execute($message)
    {
        var_dump('log the message to a database');
    }
}

// ...
// somewhere there is class where we need to log user information

class UsersController
{
    public function show()
    {
        $user = 'John Doe';

        // How to log this information?
        // new LogToFile ?
        // no, no its no good
    }
}
