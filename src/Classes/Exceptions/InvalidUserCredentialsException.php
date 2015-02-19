<?php

namespace src\classes\Exceptions;

class InvalidUserCredentialsException extends \RuntimeException{
    protected $message = "Las credenciales son incorrectas";
    protected $code = 2001;
}