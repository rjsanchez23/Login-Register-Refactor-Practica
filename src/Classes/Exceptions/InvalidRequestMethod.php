<?php

namespace src\classes\Exceptions;

class InvalidRequestMethodException extends \RuntimeException{
    protected $message = "El metodo de request es incorrecto";
    protected $code = 2002;
}