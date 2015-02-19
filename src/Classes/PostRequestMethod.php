<?php


namespace src\classes;


use src\classes\Exceptions\InvalidRequestMethodException;
use src\classes\Interfaces\RequestMethodInterface;

class PostRequestMethod implements RequestMethodInterface{

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




}