<?php

namespace src\classes\exceptions;

class InvalidRequestMethodException extends \RuntimeException{
    protected $message = "Bad request method";
    protected $code = 2002;
}