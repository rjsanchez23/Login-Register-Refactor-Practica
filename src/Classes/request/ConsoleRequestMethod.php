<?php


namespace src\classes\request;

use src\classes\request\RequestMethodInterface;

class ConsoleRequestMethod implements RequestMethodInterface{


    private $handle;
    private $line;

    const POST_REQUEST = 'POST';

    public function __construct(){
        $this->handle = fopen ("php://stdin","r");
    }

    public function getUserMail()
    {
        echo "User: ";
        $this->line = fgets($this->handle);
        return trim($this->line);
    }
    public function getUserPassword()
    {
        echo "Password: ";
        $this->line = fgets($this->handle);
        return trim($this->line);
    }


}