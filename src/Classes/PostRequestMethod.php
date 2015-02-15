<?php


namespace src\classes;

use src\classes\Interfaces\IRequestMethod;
use src\classes\Exceptions\InvalidRequestMethodException;

class PostRequestMethod implements IRequestMethod{

    const POST_REQUEST = 'POST';

    public function getUserMail()
    {
        $this->CheckMethod();
        return $_POST['email'];
    }
    public function getUserPassword()
    {
        $this->CheckMethod();
        return $_POST['password'];
    }
    public function CheckMethod()
    {
        $isPostRequest = $_SERVER['REQUEST_METHOD'] == self::POST_REQUEST;
        if (!$isPostRequest) {
            throw new InvalidRequestMethodException;
        }
    }
    public function AcceptedLoginAction($config)
    {
        header("Location: ".$config['redirectAfterLogin']);
    }
    public function AcceptedRegistrationAction($config)
    {
        header("Location: ".$config['redirectAfterRegister']);
    }



}