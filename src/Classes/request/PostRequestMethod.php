<?php


namespace src\classes\request;


use src\classes\exceptions\InvalidRequestMethodException;
use src\classes\request\RequestMethodInterface;

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