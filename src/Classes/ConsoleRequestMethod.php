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

    public function loginResponse($config, $isValidUser){
        if($isValidUser){
            echo $config['ConsoleMenssageAfterLogin'];
        }else{
            echo "Error: Credenciales Invalidas\n\n";
        }

    }
    public function RegistrationResponse($config){
            echo $config['ConsoleMenssageAfterRegister'];

    }

}