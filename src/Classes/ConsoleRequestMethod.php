<?php


namespace src\classes;

use src\classes\Interfaces\IRequestMethod;

class ConsoleRequestMethod implements IRequestMethod{


    private $handle;
    private $line;

    const POST_REQUEST = 'POST';

    public function __construct(){
        $this->handle = fopen ("php://stdin","r");
    }

    public function requestUserMail()
    {
        echo "User: ";
        $this->line = fgets($this->handle);
        return trim($this->line);
    }
    public function requestUserPassword()
    {
        echo "Password: ";
        $this->line = fgets($this->handle);
        return trim($this->line);
    }

    public function AcceptedLoginAction($config){
        echo $config['ConsoleMenssageAfterLogin'];
    }
    public function AcceptedRegistrationAction($config){
        echo $config['ConsoleMenssageAfterRegister'];
    }

}