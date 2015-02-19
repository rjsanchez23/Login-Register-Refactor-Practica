<?php

namespace src\classes\exceptions;

class InvalidUserCredentialsException extends \RuntimeException{
    protected $message = "Invalid credentials";
    protected $code = 2001;
}